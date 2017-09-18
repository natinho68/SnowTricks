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
        $__internal_260033d94f6b935f49de3e847b9abeca5d42f11aa5e399970ac9c3c55f01cb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_260033d94f6b935f49de3e847b9abeca5d42f11aa5e399970ac9c3c55f01cb39->enter($__internal_260033d94f6b935f49de3e847b9abeca5d42f11aa5e399970ac9c3c55f01cb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8373c89269e04b84d4571851e83f80c9bcc3b30bef33ed5ba58d685805f57d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8373c89269e04b84d4571851e83f80c9bcc3b30bef33ed5ba58d685805f57d65->enter($__internal_8373c89269e04b84d4571851e83f80c9bcc3b30bef33ed5ba58d685805f57d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_260033d94f6b935f49de3e847b9abeca5d42f11aa5e399970ac9c3c55f01cb39->leave($__internal_260033d94f6b935f49de3e847b9abeca5d42f11aa5e399970ac9c3c55f01cb39_prof);

        
        $__internal_8373c89269e04b84d4571851e83f80c9bcc3b30bef33ed5ba58d685805f57d65->leave($__internal_8373c89269e04b84d4571851e83f80c9bcc3b30bef33ed5ba58d685805f57d65_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f5fa7247bc8133bb6da61dc7e17969cbf40337672ce0455ffdf9a752e36c6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5fa7247bc8133bb6da61dc7e17969cbf40337672ce0455ffdf9a752e36c6f0->enter($__internal_3f5fa7247bc8133bb6da61dc7e17969cbf40337672ce0455ffdf9a752e36c6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd344a7fb31366ad00efb26862d2dd5a639ed84b7557ef73ca3eba839e8419fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd344a7fb31366ad00efb26862d2dd5a639ed84b7557ef73ca3eba839e8419fd->enter($__internal_cd344a7fb31366ad00efb26862d2dd5a639ed84b7557ef73ca3eba839e8419fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cd344a7fb31366ad00efb26862d2dd5a639ed84b7557ef73ca3eba839e8419fd->leave($__internal_cd344a7fb31366ad00efb26862d2dd5a639ed84b7557ef73ca3eba839e8419fd_prof);

        
        $__internal_3f5fa7247bc8133bb6da61dc7e17969cbf40337672ce0455ffdf9a752e36c6f0->leave($__internal_3f5fa7247bc8133bb6da61dc7e17969cbf40337672ce0455ffdf9a752e36c6f0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2f2155a456f3306db65b9c6db3597bc68ee63f98ff6a8c6a91f325b6db6b228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f2155a456f3306db65b9c6db3597bc68ee63f98ff6a8c6a91f325b6db6b228->enter($__internal_a2f2155a456f3306db65b9c6db3597bc68ee63f98ff6a8c6a91f325b6db6b228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a1169e665929458f87f80385b3c0a53bec23809edc4a835e9cd20fbe8499863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1169e665929458f87f80385b3c0a53bec23809edc4a835e9cd20fbe8499863->enter($__internal_6a1169e665929458f87f80385b3c0a53bec23809edc4a835e9cd20fbe8499863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6a1169e665929458f87f80385b3c0a53bec23809edc4a835e9cd20fbe8499863->leave($__internal_6a1169e665929458f87f80385b3c0a53bec23809edc4a835e9cd20fbe8499863_prof);

        
        $__internal_a2f2155a456f3306db65b9c6db3597bc68ee63f98ff6a8c6a91f325b6db6b228->leave($__internal_a2f2155a456f3306db65b9c6db3597bc68ee63f98ff6a8c6a91f325b6db6b228_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c160438ee13f3f7875de767e89ed4582234f977938a8cbf1cd7d10ae01b5bc01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c160438ee13f3f7875de767e89ed4582234f977938a8cbf1cd7d10ae01b5bc01->enter($__internal_c160438ee13f3f7875de767e89ed4582234f977938a8cbf1cd7d10ae01b5bc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1431085ce18d516df5958169ba9135f8fad0f6419b53ac074ba8046cc8d2b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1431085ce18d516df5958169ba9135f8fad0f6419b53ac074ba8046cc8d2b67->enter($__internal_b1431085ce18d516df5958169ba9135f8fad0f6419b53ac074ba8046cc8d2b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b1431085ce18d516df5958169ba9135f8fad0f6419b53ac074ba8046cc8d2b67->leave($__internal_b1431085ce18d516df5958169ba9135f8fad0f6419b53ac074ba8046cc8d2b67_prof);

        
        $__internal_c160438ee13f3f7875de767e89ed4582234f977938a8cbf1cd7d10ae01b5bc01->leave($__internal_c160438ee13f3f7875de767e89ed4582234f977938a8cbf1cd7d10ae01b5bc01_prof);

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
