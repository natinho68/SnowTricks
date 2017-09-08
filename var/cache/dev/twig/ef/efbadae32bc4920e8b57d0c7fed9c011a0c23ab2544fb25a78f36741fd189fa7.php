<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e1e08019b5121493b6562dd7acc96383d08e81f353505037c54e345b314f903a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2688e5a7f929d5b4f4c60d1b665ab6914ccc9230b5d003667bbbe191ae2d78d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2688e5a7f929d5b4f4c60d1b665ab6914ccc9230b5d003667bbbe191ae2d78d3->enter($__internal_2688e5a7f929d5b4f4c60d1b665ab6914ccc9230b5d003667bbbe191ae2d78d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a1176ac3a30f129311b80a38e84c33937ec4921da3479ddd2281b2dcde87284f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1176ac3a30f129311b80a38e84c33937ec4921da3479ddd2281b2dcde87284f->enter($__internal_a1176ac3a30f129311b80a38e84c33937ec4921da3479ddd2281b2dcde87284f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2688e5a7f929d5b4f4c60d1b665ab6914ccc9230b5d003667bbbe191ae2d78d3->leave($__internal_2688e5a7f929d5b4f4c60d1b665ab6914ccc9230b5d003667bbbe191ae2d78d3_prof);

        
        $__internal_a1176ac3a30f129311b80a38e84c33937ec4921da3479ddd2281b2dcde87284f->leave($__internal_a1176ac3a30f129311b80a38e84c33937ec4921da3479ddd2281b2dcde87284f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b76aa56cc0244803a647f7e44f08b305abfe2b5fcc631fd54c9d08d9eea5a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b76aa56cc0244803a647f7e44f08b305abfe2b5fcc631fd54c9d08d9eea5a69->enter($__internal_9b76aa56cc0244803a647f7e44f08b305abfe2b5fcc631fd54c9d08d9eea5a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f569593fbce4e5049105311ee827fedf2de528f2e69e794b979a59aa4745df36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f569593fbce4e5049105311ee827fedf2de528f2e69e794b979a59aa4745df36->enter($__internal_f569593fbce4e5049105311ee827fedf2de528f2e69e794b979a59aa4745df36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f569593fbce4e5049105311ee827fedf2de528f2e69e794b979a59aa4745df36->leave($__internal_f569593fbce4e5049105311ee827fedf2de528f2e69e794b979a59aa4745df36_prof);

        
        $__internal_9b76aa56cc0244803a647f7e44f08b305abfe2b5fcc631fd54c9d08d9eea5a69->leave($__internal_9b76aa56cc0244803a647f7e44f08b305abfe2b5fcc631fd54c9d08d9eea5a69_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6c4bf7988db8cfe1e140d7ab108459a35be3c7e608d53a7b56ee37d9b2b8a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c4bf7988db8cfe1e140d7ab108459a35be3c7e608d53a7b56ee37d9b2b8a93->enter($__internal_a6c4bf7988db8cfe1e140d7ab108459a35be3c7e608d53a7b56ee37d9b2b8a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_85ed140defb57d3f0bc4b04b90f478bd4bffaded47c8f5cdf0f2fa462a3fc4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ed140defb57d3f0bc4b04b90f478bd4bffaded47c8f5cdf0f2fa462a3fc4f2->enter($__internal_85ed140defb57d3f0bc4b04b90f478bd4bffaded47c8f5cdf0f2fa462a3fc4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_85ed140defb57d3f0bc4b04b90f478bd4bffaded47c8f5cdf0f2fa462a3fc4f2->leave($__internal_85ed140defb57d3f0bc4b04b90f478bd4bffaded47c8f5cdf0f2fa462a3fc4f2_prof);

        
        $__internal_a6c4bf7988db8cfe1e140d7ab108459a35be3c7e608d53a7b56ee37d9b2b8a93->leave($__internal_a6c4bf7988db8cfe1e140d7ab108459a35be3c7e608d53a7b56ee37d9b2b8a93_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c53fd1feac219b236ec7e9f78ec829bebece7725f604555588227b5a9579e490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53fd1feac219b236ec7e9f78ec829bebece7725f604555588227b5a9579e490->enter($__internal_c53fd1feac219b236ec7e9f78ec829bebece7725f604555588227b5a9579e490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13059b96c8101333f4cb340ad08cde6785ca58ed2a84827a653783cb5be6fa7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13059b96c8101333f4cb340ad08cde6785ca58ed2a84827a653783cb5be6fa7c->enter($__internal_13059b96c8101333f4cb340ad08cde6785ca58ed2a84827a653783cb5be6fa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13059b96c8101333f4cb340ad08cde6785ca58ed2a84827a653783cb5be6fa7c->leave($__internal_13059b96c8101333f4cb340ad08cde6785ca58ed2a84827a653783cb5be6fa7c_prof);

        
        $__internal_c53fd1feac219b236ec7e9f78ec829bebece7725f604555588227b5a9579e490->leave($__internal_c53fd1feac219b236ec7e9f78ec829bebece7725f604555588227b5a9579e490_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
