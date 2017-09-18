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
        $__internal_640d699feec61a987ac20c81041c67f1ca40f3f6631795c25d7b2e45e4774700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_640d699feec61a987ac20c81041c67f1ca40f3f6631795c25d7b2e45e4774700->enter($__internal_640d699feec61a987ac20c81041c67f1ca40f3f6631795c25d7b2e45e4774700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_67210a3eddbb3d173ba6e67b63cc532d26933edd3a3c6cff3e1ac94db7fb47d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67210a3eddbb3d173ba6e67b63cc532d26933edd3a3c6cff3e1ac94db7fb47d0->enter($__internal_67210a3eddbb3d173ba6e67b63cc532d26933edd3a3c6cff3e1ac94db7fb47d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_640d699feec61a987ac20c81041c67f1ca40f3f6631795c25d7b2e45e4774700->leave($__internal_640d699feec61a987ac20c81041c67f1ca40f3f6631795c25d7b2e45e4774700_prof);

        
        $__internal_67210a3eddbb3d173ba6e67b63cc532d26933edd3a3c6cff3e1ac94db7fb47d0->leave($__internal_67210a3eddbb3d173ba6e67b63cc532d26933edd3a3c6cff3e1ac94db7fb47d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c8acd8c9c7e2293946d5d9638b1da21819c267ee7dc688e4892ade1f6ddbc57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c8acd8c9c7e2293946d5d9638b1da21819c267ee7dc688e4892ade1f6ddbc57->enter($__internal_8c8acd8c9c7e2293946d5d9638b1da21819c267ee7dc688e4892ade1f6ddbc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc860f043411995fbff8dfb6222245975e6bc6cf47e03e7ce7c50a3f1b013cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc860f043411995fbff8dfb6222245975e6bc6cf47e03e7ce7c50a3f1b013cd6->enter($__internal_fc860f043411995fbff8dfb6222245975e6bc6cf47e03e7ce7c50a3f1b013cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fc860f043411995fbff8dfb6222245975e6bc6cf47e03e7ce7c50a3f1b013cd6->leave($__internal_fc860f043411995fbff8dfb6222245975e6bc6cf47e03e7ce7c50a3f1b013cd6_prof);

        
        $__internal_8c8acd8c9c7e2293946d5d9638b1da21819c267ee7dc688e4892ade1f6ddbc57->leave($__internal_8c8acd8c9c7e2293946d5d9638b1da21819c267ee7dc688e4892ade1f6ddbc57_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0434f1f74e6cc1b49201ec2e493cce48b328007b3a0f1418643883fdbc27d034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0434f1f74e6cc1b49201ec2e493cce48b328007b3a0f1418643883fdbc27d034->enter($__internal_0434f1f74e6cc1b49201ec2e493cce48b328007b3a0f1418643883fdbc27d034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4eaba93657c015cf179b843214e95d3e6e353323cb36e0c240e78837caa2065e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eaba93657c015cf179b843214e95d3e6e353323cb36e0c240e78837caa2065e->enter($__internal_4eaba93657c015cf179b843214e95d3e6e353323cb36e0c240e78837caa2065e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4eaba93657c015cf179b843214e95d3e6e353323cb36e0c240e78837caa2065e->leave($__internal_4eaba93657c015cf179b843214e95d3e6e353323cb36e0c240e78837caa2065e_prof);

        
        $__internal_0434f1f74e6cc1b49201ec2e493cce48b328007b3a0f1418643883fdbc27d034->leave($__internal_0434f1f74e6cc1b49201ec2e493cce48b328007b3a0f1418643883fdbc27d034_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee85e730598df16940668cf34976330aaed118d3bc227d7ea35c207faf03f961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee85e730598df16940668cf34976330aaed118d3bc227d7ea35c207faf03f961->enter($__internal_ee85e730598df16940668cf34976330aaed118d3bc227d7ea35c207faf03f961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc39f0203e8971360619a3f063d3974c964e03507c0d34d871391277cc6459ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc39f0203e8971360619a3f063d3974c964e03507c0d34d871391277cc6459ce->enter($__internal_dc39f0203e8971360619a3f063d3974c964e03507c0d34d871391277cc6459ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dc39f0203e8971360619a3f063d3974c964e03507c0d34d871391277cc6459ce->leave($__internal_dc39f0203e8971360619a3f063d3974c964e03507c0d34d871391277cc6459ce_prof);

        
        $__internal_ee85e730598df16940668cf34976330aaed118d3bc227d7ea35c207faf03f961->leave($__internal_ee85e730598df16940668cf34976330aaed118d3bc227d7ea35c207faf03f961_prof);

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
