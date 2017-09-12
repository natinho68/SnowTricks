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
        $__internal_dc85c59098a7c43b6350fc71bfa9d6ba5de69257499b9a6ecc5839c8cb39fc7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc85c59098a7c43b6350fc71bfa9d6ba5de69257499b9a6ecc5839c8cb39fc7f->enter($__internal_dc85c59098a7c43b6350fc71bfa9d6ba5de69257499b9a6ecc5839c8cb39fc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3d9e84ab5d5f0927ab3fdef1276218a99068a0d49eec15082f83fe238965e63c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9e84ab5d5f0927ab3fdef1276218a99068a0d49eec15082f83fe238965e63c->enter($__internal_3d9e84ab5d5f0927ab3fdef1276218a99068a0d49eec15082f83fe238965e63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_dc85c59098a7c43b6350fc71bfa9d6ba5de69257499b9a6ecc5839c8cb39fc7f->leave($__internal_dc85c59098a7c43b6350fc71bfa9d6ba5de69257499b9a6ecc5839c8cb39fc7f_prof);

        
        $__internal_3d9e84ab5d5f0927ab3fdef1276218a99068a0d49eec15082f83fe238965e63c->leave($__internal_3d9e84ab5d5f0927ab3fdef1276218a99068a0d49eec15082f83fe238965e63c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_32caebc711cd51fcfb5fa99a3112a24b0b7da63ce2677d3784fa85c728367e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32caebc711cd51fcfb5fa99a3112a24b0b7da63ce2677d3784fa85c728367e98->enter($__internal_32caebc711cd51fcfb5fa99a3112a24b0b7da63ce2677d3784fa85c728367e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e27103ad6aefc70b0d2af44cb53d733511b89752b8adaff21c88accfee4968ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27103ad6aefc70b0d2af44cb53d733511b89752b8adaff21c88accfee4968ff->enter($__internal_e27103ad6aefc70b0d2af44cb53d733511b89752b8adaff21c88accfee4968ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e27103ad6aefc70b0d2af44cb53d733511b89752b8adaff21c88accfee4968ff->leave($__internal_e27103ad6aefc70b0d2af44cb53d733511b89752b8adaff21c88accfee4968ff_prof);

        
        $__internal_32caebc711cd51fcfb5fa99a3112a24b0b7da63ce2677d3784fa85c728367e98->leave($__internal_32caebc711cd51fcfb5fa99a3112a24b0b7da63ce2677d3784fa85c728367e98_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_915fc82ffc46fc1d8fd10c2c32c465b7d980c4f180fb120634db487afad490b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915fc82ffc46fc1d8fd10c2c32c465b7d980c4f180fb120634db487afad490b4->enter($__internal_915fc82ffc46fc1d8fd10c2c32c465b7d980c4f180fb120634db487afad490b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c82a68ee6c0b8d8e0cc6c2aa0920f6ffdfd28581fec34ed64f6b8bd5a94f6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c82a68ee6c0b8d8e0cc6c2aa0920f6ffdfd28581fec34ed64f6b8bd5a94f6c6->enter($__internal_8c82a68ee6c0b8d8e0cc6c2aa0920f6ffdfd28581fec34ed64f6b8bd5a94f6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8c82a68ee6c0b8d8e0cc6c2aa0920f6ffdfd28581fec34ed64f6b8bd5a94f6c6->leave($__internal_8c82a68ee6c0b8d8e0cc6c2aa0920f6ffdfd28581fec34ed64f6b8bd5a94f6c6_prof);

        
        $__internal_915fc82ffc46fc1d8fd10c2c32c465b7d980c4f180fb120634db487afad490b4->leave($__internal_915fc82ffc46fc1d8fd10c2c32c465b7d980c4f180fb120634db487afad490b4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcf47ce8210951616996a5eea8766a89000371c1a027d59184967adb2fcb82ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcf47ce8210951616996a5eea8766a89000371c1a027d59184967adb2fcb82ce->enter($__internal_fcf47ce8210951616996a5eea8766a89000371c1a027d59184967adb2fcb82ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7f32a8f7c120a5a73b3cee286f8630235c7d609f7dbe942ea1da6f751ffe0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f32a8f7c120a5a73b3cee286f8630235c7d609f7dbe942ea1da6f751ffe0ba->enter($__internal_f7f32a8f7c120a5a73b3cee286f8630235c7d609f7dbe942ea1da6f751ffe0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f7f32a8f7c120a5a73b3cee286f8630235c7d609f7dbe942ea1da6f751ffe0ba->leave($__internal_f7f32a8f7c120a5a73b3cee286f8630235c7d609f7dbe942ea1da6f751ffe0ba_prof);

        
        $__internal_fcf47ce8210951616996a5eea8766a89000371c1a027d59184967adb2fcb82ce->leave($__internal_fcf47ce8210951616996a5eea8766a89000371c1a027d59184967adb2fcb82ce_prof);

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
