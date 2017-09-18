<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_34d1c48f3841aed47406a42f1d6d8a993b8f6800f37ef9d589a6f4b9552c68c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "TwigBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e2108d5def7b4b71b70db0b153f00c84c0768bcf275c31e165349e874b406dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2108d5def7b4b71b70db0b153f00c84c0768bcf275c31e165349e874b406dd->enter($__internal_0e2108d5def7b4b71b70db0b153f00c84c0768bcf275c31e165349e874b406dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_b66c480d8df336bb121c80264bd0b25b11ec7bf5ad8f16754dd466724517f669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66c480d8df336bb121c80264bd0b25b11ec7bf5ad8f16754dd466724517f669->enter($__internal_b66c480d8df336bb121c80264bd0b25b11ec7bf5ad8f16754dd466724517f669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2108d5def7b4b71b70db0b153f00c84c0768bcf275c31e165349e874b406dd->leave($__internal_0e2108d5def7b4b71b70db0b153f00c84c0768bcf275c31e165349e874b406dd_prof);

        
        $__internal_b66c480d8df336bb121c80264bd0b25b11ec7bf5ad8f16754dd466724517f669->leave($__internal_b66c480d8df336bb121c80264bd0b25b11ec7bf5ad8f16754dd466724517f669_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99d381a8f500406cba80e0cabc02c0e2cf30bcab118ddc91a15e6cbe4c3072aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d381a8f500406cba80e0cabc02c0e2cf30bcab118ddc91a15e6cbe4c3072aa->enter($__internal_99d381a8f500406cba80e0cabc02c0e2cf30bcab118ddc91a15e6cbe4c3072aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f4b705d04f3a60594cda70a260bd803c7c0c1a80e7eb3b27e97c0a904e102e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4b705d04f3a60594cda70a260bd803c7c0c1a80e7eb3b27e97c0a904e102e9->enter($__internal_0f4b705d04f3a60594cda70a260bd803c7c0c1a80e7eb3b27e97c0a904e102e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0f4b705d04f3a60594cda70a260bd803c7c0c1a80e7eb3b27e97c0a904e102e9->leave($__internal_0f4b705d04f3a60594cda70a260bd803c7c0c1a80e7eb3b27e97c0a904e102e9_prof);

        
        $__internal_99d381a8f500406cba80e0cabc02c0e2cf30bcab118ddc91a15e6cbe4c3072aa->leave($__internal_99d381a8f500406cba80e0cabc02c0e2cf30bcab118ddc91a15e6cbe4c3072aa_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_193063855b4648d73902f102f82f08510d91275021535fcfb617c329922b49c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193063855b4648d73902f102f82f08510d91275021535fcfb617c329922b49c6->enter($__internal_193063855b4648d73902f102f82f08510d91275021535fcfb617c329922b49c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0eb44b16117354f8a31a94264aafe5f84098d29c4ea728c5e5f1d18678013b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eb44b16117354f8a31a94264aafe5f84098d29c4ea728c5e5f1d18678013b80->enter($__internal_0eb44b16117354f8a31a94264aafe5f84098d29c4ea728c5e5f1d18678013b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"slider home\">
        <ul class=\"slides home\">
            <li>
                <img class=\"responsive-img\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/lost.jpg"), "html", null, true);
        echo "\">
                <div class=\"caption center-align\">
                    <h2>Are you lost in the mountain ?</h2>
                    <h3>The server returned a \"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h3>
                    <h5 class=\"light grey-text text-lighten-3\"> Something is broken. Please e-mail us at <a href=\"mailto:nathan.meyer-pro@live.fr\">nathan.meyer-pro@live.fr</a> and let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.</h5>
                    <div><br><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">home</i>
                            Back to the home page
                        </a></div>
                </div>
            </li>
        </ul>
    </div>


";
        
        $__internal_0eb44b16117354f8a31a94264aafe5f84098d29c4ea728c5e5f1d18678013b80->leave($__internal_0eb44b16117354f8a31a94264aafe5f84098d29c4ea728c5e5f1d18678013b80_prof);

        
        $__internal_193063855b4648d73902f102f82f08510d91275021535fcfb617c329922b49c6->leave($__internal_193063855b4648d73902f102f82f08510d91275021535fcfb617c329922b49c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  83 => 14,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block title %}
    404 Not Found ! - {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"slider home\">
        <ul class=\"slides home\">
            <li>
                <img class=\"responsive-img\" src=\"{{ asset('uploads/img/lost.jpg') }}\">
                <div class=\"caption center-align\">
                    <h2>Are you lost in the mountain ?</h2>
                    <h3>The server returned a \"{{ status_code }} {{ status_text }}\".</h3>
                    <h5 class=\"light grey-text text-lighten-3\"> Something is broken. Please e-mail us at <a href=\"mailto:nathan.meyer-pro@live.fr\">nathan.meyer-pro@live.fr</a> and let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.</h5>
                    <div><br><a href=\"{{ path('homepage') }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">home</i>
                            Back to the home page
                        </a></div>
                </div>
            </li>
        </ul>
    </div>


{% endblock %}
", "TwigBundle:Exception:error.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
