<?php namespace Grav\Plugin;

use Grav\Common\Page\Page;
use RocketTheme\Toolbox\Event\Event;

use Grav\Common\Plugin;
use Grav\Common\Data\Data;

class Simple_FormPlugin extends Plugin
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     *
     */
    public function onPluginsInitialized()
    {
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onTwigInitialized'   => ['onTwigInitialized', 0]
        ]);
    }

    /**
     *
     */
    public function onTwigInitialized()
    {
        $this->grav['twig']->twig()->addFunction(
            new \Twig_SimpleFunction('simple_form', [$this, 'simpleFormFunction'], ['is_safe' => ['html']])
        );
    }

    /**
     *
     */
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    /**
     * @param array $params
     * @return string|void
     */
    public function simpleFormFunction($params = [])
    {
        // Collect page object, @todo: need evaluate a modular page.
        $page = $this->grav['page'];

        $this->mergePluginConfig($page, $params);

        if (false === $this->validate($page, $params)) {
            return;
        }

        $template_vars = [
            'fields'    => $this->config->get('fields'),
            'token'     => $this->config->get('token'),
            'messages'  => $this->config->get('messages')
        ];

        //$this->grav['assets']->addInlineJs($this->grav['twig']->twig()->render('plugins/simple_form/' . $this->config->get('template_file') . '.js.twig', $template_vars));

        $output = trim($this->grav['twig']->twig()->render('plugins/simple_form/' . $this->config->get('template_file', 'simple_form') . '.html.twig', $template_vars));

        return $output;
    }

    /**
     * @param Page $page
     * @param $params
     * @return bool
     */
    private function validate(Page $page, $params)
    {
        if ((isset($page->header()->simple_form) and $page->header()->simple_form) or $this->config->get('token')) {
            return true;
        } elseif (isset($params['token'])) {
            return true;
        }

        return false;
    }

    /**
     * @param Page $page
     * @param array $params
     */
    private function mergePluginConfig(Page $page, $params = [])
    {
        $this->config = new Data((array) $this->grav['config']->get('plugins.simple_form'));

        if (isset($page->header()->simple_form)) {
            if (is_array($page->header()->simple_form)) {
                $this->config = new Data(array_replace_recursive($this->config->toArray(), $page->header()->simple_form));
            } else {
                $this->config->set('enabled', $page->header()->simple_form);
            }
        }

        $this->config = new Data(array_replace_recursive($this->config->toArray(), $params));
    }
}
