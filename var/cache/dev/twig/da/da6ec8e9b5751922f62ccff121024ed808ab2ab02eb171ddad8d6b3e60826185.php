<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c4698bc71eecd92678b24b1c88b829378f15941808433b9f0832ccce2b359164 extends Twig_Template
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
        $__internal_88bd25a0c8a7af9e2207fd0c3fd7f00e9b0cfd3572936c10fe182b1dd43614be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88bd25a0c8a7af9e2207fd0c3fd7f00e9b0cfd3572936c10fe182b1dd43614be->enter($__internal_88bd25a0c8a7af9e2207fd0c3fd7f00e9b0cfd3572936c10fe182b1dd43614be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7a0b2b44d72b5b9ae8e77d32b7a158d8a0e59acdc277e74f6f24665930924258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0b2b44d72b5b9ae8e77d32b7a158d8a0e59acdc277e74f6f24665930924258->enter($__internal_7a0b2b44d72b5b9ae8e77d32b7a158d8a0e59acdc277e74f6f24665930924258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_88bd25a0c8a7af9e2207fd0c3fd7f00e9b0cfd3572936c10fe182b1dd43614be->leave($__internal_88bd25a0c8a7af9e2207fd0c3fd7f00e9b0cfd3572936c10fe182b1dd43614be_prof);

        
        $__internal_7a0b2b44d72b5b9ae8e77d32b7a158d8a0e59acdc277e74f6f24665930924258->leave($__internal_7a0b2b44d72b5b9ae8e77d32b7a158d8a0e59acdc277e74f6f24665930924258_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e6260a4cad723d96ea6ac7b62498ae822a044d74177bf89fde84d3b10d0577a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e6260a4cad723d96ea6ac7b62498ae822a044d74177bf89fde84d3b10d0577a->enter($__internal_5e6260a4cad723d96ea6ac7b62498ae822a044d74177bf89fde84d3b10d0577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cd37a7a67e8109ef345de80e374b65b521a92ae0bd7bc8e40340680aac4c848f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd37a7a67e8109ef345de80e374b65b521a92ae0bd7bc8e40340680aac4c848f->enter($__internal_cd37a7a67e8109ef345de80e374b65b521a92ae0bd7bc8e40340680aac4c848f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cd37a7a67e8109ef345de80e374b65b521a92ae0bd7bc8e40340680aac4c848f->leave($__internal_cd37a7a67e8109ef345de80e374b65b521a92ae0bd7bc8e40340680aac4c848f_prof);

        
        $__internal_5e6260a4cad723d96ea6ac7b62498ae822a044d74177bf89fde84d3b10d0577a->leave($__internal_5e6260a4cad723d96ea6ac7b62498ae822a044d74177bf89fde84d3b10d0577a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_51793f3d5116672eb46351e2eaeefdf403231ad09ede2bb5f37ae1f8f175700c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51793f3d5116672eb46351e2eaeefdf403231ad09ede2bb5f37ae1f8f175700c->enter($__internal_51793f3d5116672eb46351e2eaeefdf403231ad09ede2bb5f37ae1f8f175700c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b8868f0e537c0d138b56f4c889d4b28b4be7a9dd6dfe52f3b0f6bfa35f4c7f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8868f0e537c0d138b56f4c889d4b28b4be7a9dd6dfe52f3b0f6bfa35f4c7f03->enter($__internal_b8868f0e537c0d138b56f4c889d4b28b4be7a9dd6dfe52f3b0f6bfa35f4c7f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b8868f0e537c0d138b56f4c889d4b28b4be7a9dd6dfe52f3b0f6bfa35f4c7f03->leave($__internal_b8868f0e537c0d138b56f4c889d4b28b4be7a9dd6dfe52f3b0f6bfa35f4c7f03_prof);

        
        $__internal_51793f3d5116672eb46351e2eaeefdf403231ad09ede2bb5f37ae1f8f175700c->leave($__internal_51793f3d5116672eb46351e2eaeefdf403231ad09ede2bb5f37ae1f8f175700c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_075763ec1aa18697ba3da320091a0bb33d149135b1cdc13a258e9debdc0b3f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075763ec1aa18697ba3da320091a0bb33d149135b1cdc13a258e9debdc0b3f8c->enter($__internal_075763ec1aa18697ba3da320091a0bb33d149135b1cdc13a258e9debdc0b3f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5586f63f1a5d52460948e5aa54e646ac42afdd781cf2198a344a274218d1ec22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5586f63f1a5d52460948e5aa54e646ac42afdd781cf2198a344a274218d1ec22->enter($__internal_5586f63f1a5d52460948e5aa54e646ac42afdd781cf2198a344a274218d1ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5586f63f1a5d52460948e5aa54e646ac42afdd781cf2198a344a274218d1ec22->leave($__internal_5586f63f1a5d52460948e5aa54e646ac42afdd781cf2198a344a274218d1ec22_prof);

        
        $__internal_075763ec1aa18697ba3da320091a0bb33d149135b1cdc13a258e9debdc0b3f8c->leave($__internal_075763ec1aa18697ba3da320091a0bb33d149135b1cdc13a258e9debdc0b3f8c_prof);

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
