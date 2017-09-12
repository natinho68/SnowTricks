<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0eb24eae90caad20cdba957b3d2457c33fc0172f934a0ab9e410550e805c3026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88dd214ddbdf41720d150bf0f1555d10751dee578d1e24b857839a972895233f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88dd214ddbdf41720d150bf0f1555d10751dee578d1e24b857839a972895233f->enter($__internal_88dd214ddbdf41720d150bf0f1555d10751dee578d1e24b857839a972895233f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_eeb7f7d8dc7e38b9359d4f2307312defec4ff745cf355320bc54c5e4399c1dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb7f7d8dc7e38b9359d4f2307312defec4ff745cf355320bc54c5e4399c1dc8->enter($__internal_eeb7f7d8dc7e38b9359d4f2307312defec4ff745cf355320bc54c5e4399c1dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88dd214ddbdf41720d150bf0f1555d10751dee578d1e24b857839a972895233f->leave($__internal_88dd214ddbdf41720d150bf0f1555d10751dee578d1e24b857839a972895233f_prof);

        
        $__internal_eeb7f7d8dc7e38b9359d4f2307312defec4ff745cf355320bc54c5e4399c1dc8->leave($__internal_eeb7f7d8dc7e38b9359d4f2307312defec4ff745cf355320bc54c5e4399c1dc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25018adc287669440292f150c6b9bdfbf7568651dd66d7dc3c11b2d17791e970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25018adc287669440292f150c6b9bdfbf7568651dd66d7dc3c11b2d17791e970->enter($__internal_25018adc287669440292f150c6b9bdfbf7568651dd66d7dc3c11b2d17791e970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dbed57b00879be3bfc764110dc3751c57a60c9b4f8d5072ae9edb822041e6394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbed57b00879be3bfc764110dc3751c57a60c9b4f8d5072ae9edb822041e6394->enter($__internal_dbed57b00879be3bfc764110dc3751c57a60c9b4f8d5072ae9edb822041e6394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_dbed57b00879be3bfc764110dc3751c57a60c9b4f8d5072ae9edb822041e6394->leave($__internal_dbed57b00879be3bfc764110dc3751c57a60c9b4f8d5072ae9edb822041e6394_prof);

        
        $__internal_25018adc287669440292f150c6b9bdfbf7568651dd66d7dc3c11b2d17791e970->leave($__internal_25018adc287669440292f150c6b9bdfbf7568651dd66d7dc3c11b2d17791e970_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb4bd35025afadd33666603fdcff3685fe1f8b7006e401dfed7956c6dd39332f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb4bd35025afadd33666603fdcff3685fe1f8b7006e401dfed7956c6dd39332f->enter($__internal_eb4bd35025afadd33666603fdcff3685fe1f8b7006e401dfed7956c6dd39332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0a7081ebd4afba6b35a1f91100ba72364f5063351f2d99b8907473aeeba5079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a7081ebd4afba6b35a1f91100ba72364f5063351f2d99b8907473aeeba5079->enter($__internal_f0a7081ebd4afba6b35a1f91100ba72364f5063351f2d99b8907473aeeba5079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f0a7081ebd4afba6b35a1f91100ba72364f5063351f2d99b8907473aeeba5079->leave($__internal_f0a7081ebd4afba6b35a1f91100ba72364f5063351f2d99b8907473aeeba5079_prof);

        
        $__internal_eb4bd35025afadd33666603fdcff3685fe1f8b7006e401dfed7956c6dd39332f->leave($__internal_eb4bd35025afadd33666603fdcff3685fe1f8b7006e401dfed7956c6dd39332f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a45db8b583571ded701ee4a93512ed94f809ec84219762657a27ecab5b74c585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45db8b583571ded701ee4a93512ed94f809ec84219762657a27ecab5b74c585->enter($__internal_a45db8b583571ded701ee4a93512ed94f809ec84219762657a27ecab5b74c585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7598e874a13e2dca9b420c0127dc78f476bfc387085a318174383c53550c2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7598e874a13e2dca9b420c0127dc78f476bfc387085a318174383c53550c2c4->enter($__internal_a7598e874a13e2dca9b420c0127dc78f476bfc387085a318174383c53550c2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a7598e874a13e2dca9b420c0127dc78f476bfc387085a318174383c53550c2c4->leave($__internal_a7598e874a13e2dca9b420c0127dc78f476bfc387085a318174383c53550c2c4_prof);

        
        $__internal_a45db8b583571ded701ee4a93512ed94f809ec84219762657a27ecab5b74c585->leave($__internal_a45db8b583571ded701ee4a93512ed94f809ec84219762657a27ecab5b74c585_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
