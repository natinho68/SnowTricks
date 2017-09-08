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
        $__internal_f36518d17783738d6dcb156bb01444ead0679bf4e1d7f87d077c90409e5f4b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36518d17783738d6dcb156bb01444ead0679bf4e1d7f87d077c90409e5f4b3a->enter($__internal_f36518d17783738d6dcb156bb01444ead0679bf4e1d7f87d077c90409e5f4b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_2c92d0122e02b1db9a661936387b21188a8dd7d047de1471c80a1c83ac182532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c92d0122e02b1db9a661936387b21188a8dd7d047de1471c80a1c83ac182532->enter($__internal_2c92d0122e02b1db9a661936387b21188a8dd7d047de1471c80a1c83ac182532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f36518d17783738d6dcb156bb01444ead0679bf4e1d7f87d077c90409e5f4b3a->leave($__internal_f36518d17783738d6dcb156bb01444ead0679bf4e1d7f87d077c90409e5f4b3a_prof);

        
        $__internal_2c92d0122e02b1db9a661936387b21188a8dd7d047de1471c80a1c83ac182532->leave($__internal_2c92d0122e02b1db9a661936387b21188a8dd7d047de1471c80a1c83ac182532_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3cc2608b53dca04a7137a9943090dca41f4589eb945f334422013e3561b26cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc2608b53dca04a7137a9943090dca41f4589eb945f334422013e3561b26cc7->enter($__internal_3cc2608b53dca04a7137a9943090dca41f4589eb945f334422013e3561b26cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30a3fb8416d2e7b18220f713f360609c0cc9e30338dd9ab29bc48cf5462b2c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a3fb8416d2e7b18220f713f360609c0cc9e30338dd9ab29bc48cf5462b2c48->enter($__internal_30a3fb8416d2e7b18220f713f360609c0cc9e30338dd9ab29bc48cf5462b2c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_30a3fb8416d2e7b18220f713f360609c0cc9e30338dd9ab29bc48cf5462b2c48->leave($__internal_30a3fb8416d2e7b18220f713f360609c0cc9e30338dd9ab29bc48cf5462b2c48_prof);

        
        $__internal_3cc2608b53dca04a7137a9943090dca41f4589eb945f334422013e3561b26cc7->leave($__internal_3cc2608b53dca04a7137a9943090dca41f4589eb945f334422013e3561b26cc7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_930ed099c29edd42f228f9e602be54769426d92c9d6dde02eefdb2872b091ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930ed099c29edd42f228f9e602be54769426d92c9d6dde02eefdb2872b091ca5->enter($__internal_930ed099c29edd42f228f9e602be54769426d92c9d6dde02eefdb2872b091ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fa78372494881d34630dfd32388afe5c3556720cd19e5307b3043e91a5559689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa78372494881d34630dfd32388afe5c3556720cd19e5307b3043e91a5559689->enter($__internal_fa78372494881d34630dfd32388afe5c3556720cd19e5307b3043e91a5559689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fa78372494881d34630dfd32388afe5c3556720cd19e5307b3043e91a5559689->leave($__internal_fa78372494881d34630dfd32388afe5c3556720cd19e5307b3043e91a5559689_prof);

        
        $__internal_930ed099c29edd42f228f9e602be54769426d92c9d6dde02eefdb2872b091ca5->leave($__internal_930ed099c29edd42f228f9e602be54769426d92c9d6dde02eefdb2872b091ca5_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bcd62c8bd5c421312246b0b96f40408941bdc3fcfd71d4e2edd2fc5be979bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bcd62c8bd5c421312246b0b96f40408941bdc3fcfd71d4e2edd2fc5be979bcb->enter($__internal_9bcd62c8bd5c421312246b0b96f40408941bdc3fcfd71d4e2edd2fc5be979bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37f4ffc7cd92d16ab8b7022b183dc843637170a8e5a38fdda62f698bfd42c3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f4ffc7cd92d16ab8b7022b183dc843637170a8e5a38fdda62f698bfd42c3f2->enter($__internal_37f4ffc7cd92d16ab8b7022b183dc843637170a8e5a38fdda62f698bfd42c3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_37f4ffc7cd92d16ab8b7022b183dc843637170a8e5a38fdda62f698bfd42c3f2->leave($__internal_37f4ffc7cd92d16ab8b7022b183dc843637170a8e5a38fdda62f698bfd42c3f2_prof);

        
        $__internal_9bcd62c8bd5c421312246b0b96f40408941bdc3fcfd71d4e2edd2fc5be979bcb->leave($__internal_9bcd62c8bd5c421312246b0b96f40408941bdc3fcfd71d4e2edd2fc5be979bcb_prof);

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
