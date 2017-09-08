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
        $__internal_5be5b0dec4640ea155d546ffcd0a9b0fd679f1482b66832b4b5c9ccc457b0db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be5b0dec4640ea155d546ffcd0a9b0fd679f1482b66832b4b5c9ccc457b0db1->enter($__internal_5be5b0dec4640ea155d546ffcd0a9b0fd679f1482b66832b4b5c9ccc457b0db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_7a3fc8ed2e16f7c34b1ef6489c106d9c7212b51eb2ddce2dd23e0a07b785ef4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3fc8ed2e16f7c34b1ef6489c106d9c7212b51eb2ddce2dd23e0a07b785ef4e->enter($__internal_7a3fc8ed2e16f7c34b1ef6489c106d9c7212b51eb2ddce2dd23e0a07b785ef4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5be5b0dec4640ea155d546ffcd0a9b0fd679f1482b66832b4b5c9ccc457b0db1->leave($__internal_5be5b0dec4640ea155d546ffcd0a9b0fd679f1482b66832b4b5c9ccc457b0db1_prof);

        
        $__internal_7a3fc8ed2e16f7c34b1ef6489c106d9c7212b51eb2ddce2dd23e0a07b785ef4e->leave($__internal_7a3fc8ed2e16f7c34b1ef6489c106d9c7212b51eb2ddce2dd23e0a07b785ef4e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b71bf9849ae055641f6d5482782fc356ce72e6431b5dab7b7a372a9a15c50ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71bf9849ae055641f6d5482782fc356ce72e6431b5dab7b7a372a9a15c50ea9->enter($__internal_b71bf9849ae055641f6d5482782fc356ce72e6431b5dab7b7a372a9a15c50ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5e889d5945f101fce170f886d457ca35bc063f824d957beb45351c5d30232bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e889d5945f101fce170f886d457ca35bc063f824d957beb45351c5d30232bd->enter($__internal_e5e889d5945f101fce170f886d457ca35bc063f824d957beb45351c5d30232bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e5e889d5945f101fce170f886d457ca35bc063f824d957beb45351c5d30232bd->leave($__internal_e5e889d5945f101fce170f886d457ca35bc063f824d957beb45351c5d30232bd_prof);

        
        $__internal_b71bf9849ae055641f6d5482782fc356ce72e6431b5dab7b7a372a9a15c50ea9->leave($__internal_b71bf9849ae055641f6d5482782fc356ce72e6431b5dab7b7a372a9a15c50ea9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd79f650a4cf085f2bf1da2878572c18d70ca2f5ff4f49feea35a77729877d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd79f650a4cf085f2bf1da2878572c18d70ca2f5ff4f49feea35a77729877d16->enter($__internal_bd79f650a4cf085f2bf1da2878572c18d70ca2f5ff4f49feea35a77729877d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac675c26869fe9aa85de6f907518aaa63f3b2f022eb0c0a242771cbc166b8aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac675c26869fe9aa85de6f907518aaa63f3b2f022eb0c0a242771cbc166b8aeb->enter($__internal_ac675c26869fe9aa85de6f907518aaa63f3b2f022eb0c0a242771cbc166b8aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ac675c26869fe9aa85de6f907518aaa63f3b2f022eb0c0a242771cbc166b8aeb->leave($__internal_ac675c26869fe9aa85de6f907518aaa63f3b2f022eb0c0a242771cbc166b8aeb_prof);

        
        $__internal_bd79f650a4cf085f2bf1da2878572c18d70ca2f5ff4f49feea35a77729877d16->leave($__internal_bd79f650a4cf085f2bf1da2878572c18d70ca2f5ff4f49feea35a77729877d16_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f72b72b264dddb101a80a3cf5d677303f53dbfdb67d36c60c8e5c36e73ea1565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72b72b264dddb101a80a3cf5d677303f53dbfdb67d36c60c8e5c36e73ea1565->enter($__internal_f72b72b264dddb101a80a3cf5d677303f53dbfdb67d36c60c8e5c36e73ea1565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_593a4951f1cf817340fdc7146b4eada471afd44de6580f6a923f674f3841f03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593a4951f1cf817340fdc7146b4eada471afd44de6580f6a923f674f3841f03f->enter($__internal_593a4951f1cf817340fdc7146b4eada471afd44de6580f6a923f674f3841f03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_593a4951f1cf817340fdc7146b4eada471afd44de6580f6a923f674f3841f03f->leave($__internal_593a4951f1cf817340fdc7146b4eada471afd44de6580f6a923f674f3841f03f_prof);

        
        $__internal_f72b72b264dddb101a80a3cf5d677303f53dbfdb67d36c60c8e5c36e73ea1565->leave($__internal_f72b72b264dddb101a80a3cf5d677303f53dbfdb67d36c60c8e5c36e73ea1565_prof);

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
