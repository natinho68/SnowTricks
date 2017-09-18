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
        $__internal_f6de1c957ddcf83563753438d95d4babb930b27f50e42d65d6a9ca23f10fe812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6de1c957ddcf83563753438d95d4babb930b27f50e42d65d6a9ca23f10fe812->enter($__internal_f6de1c957ddcf83563753438d95d4babb930b27f50e42d65d6a9ca23f10fe812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_75df3a04e27217258478bee4ffb0b27e18780ba570cc1ff58337913d732e69e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75df3a04e27217258478bee4ffb0b27e18780ba570cc1ff58337913d732e69e6->enter($__internal_75df3a04e27217258478bee4ffb0b27e18780ba570cc1ff58337913d732e69e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f6de1c957ddcf83563753438d95d4babb930b27f50e42d65d6a9ca23f10fe812->leave($__internal_f6de1c957ddcf83563753438d95d4babb930b27f50e42d65d6a9ca23f10fe812_prof);

        
        $__internal_75df3a04e27217258478bee4ffb0b27e18780ba570cc1ff58337913d732e69e6->leave($__internal_75df3a04e27217258478bee4ffb0b27e18780ba570cc1ff58337913d732e69e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97f7c31d68accf9b2776059de33377bf21b8cd3c68e0b0aabc7c8b52ed380414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97f7c31d68accf9b2776059de33377bf21b8cd3c68e0b0aabc7c8b52ed380414->enter($__internal_97f7c31d68accf9b2776059de33377bf21b8cd3c68e0b0aabc7c8b52ed380414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de4e23ac896c465777ac2c122595ddbd72d879ff554c1c0248349aa768c3c267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4e23ac896c465777ac2c122595ddbd72d879ff554c1c0248349aa768c3c267->enter($__internal_de4e23ac896c465777ac2c122595ddbd72d879ff554c1c0248349aa768c3c267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_de4e23ac896c465777ac2c122595ddbd72d879ff554c1c0248349aa768c3c267->leave($__internal_de4e23ac896c465777ac2c122595ddbd72d879ff554c1c0248349aa768c3c267_prof);

        
        $__internal_97f7c31d68accf9b2776059de33377bf21b8cd3c68e0b0aabc7c8b52ed380414->leave($__internal_97f7c31d68accf9b2776059de33377bf21b8cd3c68e0b0aabc7c8b52ed380414_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d8aa30d1ee570e53d89a5d6a6a828532629fd04ae050c6ab1d86119b45361ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8aa30d1ee570e53d89a5d6a6a828532629fd04ae050c6ab1d86119b45361ffc->enter($__internal_d8aa30d1ee570e53d89a5d6a6a828532629fd04ae050c6ab1d86119b45361ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bc38aa165f294f2a3206b0ab1afb3e883e4040a504817a4d3d3496e389636fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc38aa165f294f2a3206b0ab1afb3e883e4040a504817a4d3d3496e389636fda->enter($__internal_bc38aa165f294f2a3206b0ab1afb3e883e4040a504817a4d3d3496e389636fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bc38aa165f294f2a3206b0ab1afb3e883e4040a504817a4d3d3496e389636fda->leave($__internal_bc38aa165f294f2a3206b0ab1afb3e883e4040a504817a4d3d3496e389636fda_prof);

        
        $__internal_d8aa30d1ee570e53d89a5d6a6a828532629fd04ae050c6ab1d86119b45361ffc->leave($__internal_d8aa30d1ee570e53d89a5d6a6a828532629fd04ae050c6ab1d86119b45361ffc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c678f5f832dfd194d5c57eebdfbb06bec73f2b37923a81b9d5e38a42a6b7b006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c678f5f832dfd194d5c57eebdfbb06bec73f2b37923a81b9d5e38a42a6b7b006->enter($__internal_c678f5f832dfd194d5c57eebdfbb06bec73f2b37923a81b9d5e38a42a6b7b006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73d92aa592970aec63aa4601fa913a8666961b42e5a915c2c8d09112d3aee42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d92aa592970aec63aa4601fa913a8666961b42e5a915c2c8d09112d3aee42f->enter($__internal_73d92aa592970aec63aa4601fa913a8666961b42e5a915c2c8d09112d3aee42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_73d92aa592970aec63aa4601fa913a8666961b42e5a915c2c8d09112d3aee42f->leave($__internal_73d92aa592970aec63aa4601fa913a8666961b42e5a915c2c8d09112d3aee42f_prof);

        
        $__internal_c678f5f832dfd194d5c57eebdfbb06bec73f2b37923a81b9d5e38a42a6b7b006->leave($__internal_c678f5f832dfd194d5c57eebdfbb06bec73f2b37923a81b9d5e38a42a6b7b006_prof);

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
