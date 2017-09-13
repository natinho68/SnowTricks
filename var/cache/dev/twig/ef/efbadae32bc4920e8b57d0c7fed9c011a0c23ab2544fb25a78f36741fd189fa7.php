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
        $__internal_7f82e876f87717c26d5991e5a12f612843474cd4fd3fcd92be4139a422698c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f82e876f87717c26d5991e5a12f612843474cd4fd3fcd92be4139a422698c58->enter($__internal_7f82e876f87717c26d5991e5a12f612843474cd4fd3fcd92be4139a422698c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e40a04751b9b50e356ec3ff490854e6fd83dd51e01c6ab452ed5699b5ca3dd82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40a04751b9b50e356ec3ff490854e6fd83dd51e01c6ab452ed5699b5ca3dd82->enter($__internal_e40a04751b9b50e356ec3ff490854e6fd83dd51e01c6ab452ed5699b5ca3dd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_7f82e876f87717c26d5991e5a12f612843474cd4fd3fcd92be4139a422698c58->leave($__internal_7f82e876f87717c26d5991e5a12f612843474cd4fd3fcd92be4139a422698c58_prof);

        
        $__internal_e40a04751b9b50e356ec3ff490854e6fd83dd51e01c6ab452ed5699b5ca3dd82->leave($__internal_e40a04751b9b50e356ec3ff490854e6fd83dd51e01c6ab452ed5699b5ca3dd82_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f0ba87b385790c1701e0f2aba5ce5dd8f584ba40b2a691ec5d8da4aa3a64b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0ba87b385790c1701e0f2aba5ce5dd8f584ba40b2a691ec5d8da4aa3a64b38->enter($__internal_9f0ba87b385790c1701e0f2aba5ce5dd8f584ba40b2a691ec5d8da4aa3a64b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_471bdcd11fff617eae620a35f8d3f67ba1536e9f5ff402b15495f65a20eb8bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471bdcd11fff617eae620a35f8d3f67ba1536e9f5ff402b15495f65a20eb8bf6->enter($__internal_471bdcd11fff617eae620a35f8d3f67ba1536e9f5ff402b15495f65a20eb8bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_471bdcd11fff617eae620a35f8d3f67ba1536e9f5ff402b15495f65a20eb8bf6->leave($__internal_471bdcd11fff617eae620a35f8d3f67ba1536e9f5ff402b15495f65a20eb8bf6_prof);

        
        $__internal_9f0ba87b385790c1701e0f2aba5ce5dd8f584ba40b2a691ec5d8da4aa3a64b38->leave($__internal_9f0ba87b385790c1701e0f2aba5ce5dd8f584ba40b2a691ec5d8da4aa3a64b38_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_44130f4ef92bedbfc354d3e6d1b97b687bd601774ed85e1757e2651c495626ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44130f4ef92bedbfc354d3e6d1b97b687bd601774ed85e1757e2651c495626ba->enter($__internal_44130f4ef92bedbfc354d3e6d1b97b687bd601774ed85e1757e2651c495626ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2589f97ae690669ee34e5f9c1fc75eb7eab99c7f421856cde43d1a8465b99ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2589f97ae690669ee34e5f9c1fc75eb7eab99c7f421856cde43d1a8465b99ef6->enter($__internal_2589f97ae690669ee34e5f9c1fc75eb7eab99c7f421856cde43d1a8465b99ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2589f97ae690669ee34e5f9c1fc75eb7eab99c7f421856cde43d1a8465b99ef6->leave($__internal_2589f97ae690669ee34e5f9c1fc75eb7eab99c7f421856cde43d1a8465b99ef6_prof);

        
        $__internal_44130f4ef92bedbfc354d3e6d1b97b687bd601774ed85e1757e2651c495626ba->leave($__internal_44130f4ef92bedbfc354d3e6d1b97b687bd601774ed85e1757e2651c495626ba_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7794bfe74b260094f0863d7804e2bd9fcab20347e187bf70ae9042f872a4a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7794bfe74b260094f0863d7804e2bd9fcab20347e187bf70ae9042f872a4a9a->enter($__internal_d7794bfe74b260094f0863d7804e2bd9fcab20347e187bf70ae9042f872a4a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e504d38c8551455e6f7f337081d9d54ff5778c6879b3c830775f37466a632d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e504d38c8551455e6f7f337081d9d54ff5778c6879b3c830775f37466a632d84->enter($__internal_e504d38c8551455e6f7f337081d9d54ff5778c6879b3c830775f37466a632d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e504d38c8551455e6f7f337081d9d54ff5778c6879b3c830775f37466a632d84->leave($__internal_e504d38c8551455e6f7f337081d9d54ff5778c6879b3c830775f37466a632d84_prof);

        
        $__internal_d7794bfe74b260094f0863d7804e2bd9fcab20347e187bf70ae9042f872a4a9a->leave($__internal_d7794bfe74b260094f0863d7804e2bd9fcab20347e187bf70ae9042f872a4a9a_prof);

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
