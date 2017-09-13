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
        $__internal_9e4ac223aad8b99704f3cfdacfd6ac256c278de1253364c5fd820b21ece700d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e4ac223aad8b99704f3cfdacfd6ac256c278de1253364c5fd820b21ece700d4->enter($__internal_9e4ac223aad8b99704f3cfdacfd6ac256c278de1253364c5fd820b21ece700d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b799b851af20459835e9025531a72b905824ed76fae66751d96ac2f614a4a7b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b799b851af20459835e9025531a72b905824ed76fae66751d96ac2f614a4a7b4->enter($__internal_b799b851af20459835e9025531a72b905824ed76fae66751d96ac2f614a4a7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9e4ac223aad8b99704f3cfdacfd6ac256c278de1253364c5fd820b21ece700d4->leave($__internal_9e4ac223aad8b99704f3cfdacfd6ac256c278de1253364c5fd820b21ece700d4_prof);

        
        $__internal_b799b851af20459835e9025531a72b905824ed76fae66751d96ac2f614a4a7b4->leave($__internal_b799b851af20459835e9025531a72b905824ed76fae66751d96ac2f614a4a7b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1846833aadad25d39bfb97db5e5d1318c3249462dc941979b561caa516c669d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1846833aadad25d39bfb97db5e5d1318c3249462dc941979b561caa516c669d3->enter($__internal_1846833aadad25d39bfb97db5e5d1318c3249462dc941979b561caa516c669d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0dd46aef4facc66b88dc5d5a07fd4622da35629cd303aed20ecf6488f9c1a299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd46aef4facc66b88dc5d5a07fd4622da35629cd303aed20ecf6488f9c1a299->enter($__internal_0dd46aef4facc66b88dc5d5a07fd4622da35629cd303aed20ecf6488f9c1a299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0dd46aef4facc66b88dc5d5a07fd4622da35629cd303aed20ecf6488f9c1a299->leave($__internal_0dd46aef4facc66b88dc5d5a07fd4622da35629cd303aed20ecf6488f9c1a299_prof);

        
        $__internal_1846833aadad25d39bfb97db5e5d1318c3249462dc941979b561caa516c669d3->leave($__internal_1846833aadad25d39bfb97db5e5d1318c3249462dc941979b561caa516c669d3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a1eda9ef9a010e859e283a9ab305499787d64a420efe0238c46e7cab4de272f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1eda9ef9a010e859e283a9ab305499787d64a420efe0238c46e7cab4de272f->enter($__internal_8a1eda9ef9a010e859e283a9ab305499787d64a420efe0238c46e7cab4de272f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c3d677ea304a04728fd6379b109ad929069717b11887f8f24dee7b032ed09774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d677ea304a04728fd6379b109ad929069717b11887f8f24dee7b032ed09774->enter($__internal_c3d677ea304a04728fd6379b109ad929069717b11887f8f24dee7b032ed09774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c3d677ea304a04728fd6379b109ad929069717b11887f8f24dee7b032ed09774->leave($__internal_c3d677ea304a04728fd6379b109ad929069717b11887f8f24dee7b032ed09774_prof);

        
        $__internal_8a1eda9ef9a010e859e283a9ab305499787d64a420efe0238c46e7cab4de272f->leave($__internal_8a1eda9ef9a010e859e283a9ab305499787d64a420efe0238c46e7cab4de272f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0a95cc8c774029656506850fc820bae9f02b0e344e0d13e2f368121c0270c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a95cc8c774029656506850fc820bae9f02b0e344e0d13e2f368121c0270c75->enter($__internal_a0a95cc8c774029656506850fc820bae9f02b0e344e0d13e2f368121c0270c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80e37978ec71716329d499ae0f6b570ce11ed948251017a57b2b7d98914e458c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e37978ec71716329d499ae0f6b570ce11ed948251017a57b2b7d98914e458c->enter($__internal_80e37978ec71716329d499ae0f6b570ce11ed948251017a57b2b7d98914e458c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_80e37978ec71716329d499ae0f6b570ce11ed948251017a57b2b7d98914e458c->leave($__internal_80e37978ec71716329d499ae0f6b570ce11ed948251017a57b2b7d98914e458c_prof);

        
        $__internal_a0a95cc8c774029656506850fc820bae9f02b0e344e0d13e2f368121c0270c75->leave($__internal_a0a95cc8c774029656506850fc820bae9f02b0e344e0d13e2f368121c0270c75_prof);

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
