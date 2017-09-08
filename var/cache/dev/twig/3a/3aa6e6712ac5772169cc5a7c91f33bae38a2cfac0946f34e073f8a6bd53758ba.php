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
        $__internal_c80243ec5bff9cc746b61ddad85b7d31fc2466eaaa7dee4bccfb810766e014b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80243ec5bff9cc746b61ddad85b7d31fc2466eaaa7dee4bccfb810766e014b0->enter($__internal_c80243ec5bff9cc746b61ddad85b7d31fc2466eaaa7dee4bccfb810766e014b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_ae3500369a4617797f7718afe7456a4164696891dc03f088300e017383bf93db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3500369a4617797f7718afe7456a4164696891dc03f088300e017383bf93db->enter($__internal_ae3500369a4617797f7718afe7456a4164696891dc03f088300e017383bf93db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80243ec5bff9cc746b61ddad85b7d31fc2466eaaa7dee4bccfb810766e014b0->leave($__internal_c80243ec5bff9cc746b61ddad85b7d31fc2466eaaa7dee4bccfb810766e014b0_prof);

        
        $__internal_ae3500369a4617797f7718afe7456a4164696891dc03f088300e017383bf93db->leave($__internal_ae3500369a4617797f7718afe7456a4164696891dc03f088300e017383bf93db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_801b706b55cf1c6a68f02baeac6ea28c53dd67247dc5483485ad920f36d09d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801b706b55cf1c6a68f02baeac6ea28c53dd67247dc5483485ad920f36d09d4c->enter($__internal_801b706b55cf1c6a68f02baeac6ea28c53dd67247dc5483485ad920f36d09d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ff6a4ef7badec7365fc74b9e68632572da7fc42614082179bd883277d8c9597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff6a4ef7badec7365fc74b9e68632572da7fc42614082179bd883277d8c9597->enter($__internal_7ff6a4ef7badec7365fc74b9e68632572da7fc42614082179bd883277d8c9597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7ff6a4ef7badec7365fc74b9e68632572da7fc42614082179bd883277d8c9597->leave($__internal_7ff6a4ef7badec7365fc74b9e68632572da7fc42614082179bd883277d8c9597_prof);

        
        $__internal_801b706b55cf1c6a68f02baeac6ea28c53dd67247dc5483485ad920f36d09d4c->leave($__internal_801b706b55cf1c6a68f02baeac6ea28c53dd67247dc5483485ad920f36d09d4c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_37d43480d52d484dd2c39338f204e9e8abae5f8231fb10caa934999bc249e490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d43480d52d484dd2c39338f204e9e8abae5f8231fb10caa934999bc249e490->enter($__internal_37d43480d52d484dd2c39338f204e9e8abae5f8231fb10caa934999bc249e490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_213ec727055cc0d9ece081914bbda44edd35c9bb89e8e104c2f5960be9d28aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213ec727055cc0d9ece081914bbda44edd35c9bb89e8e104c2f5960be9d28aa7->enter($__internal_213ec727055cc0d9ece081914bbda44edd35c9bb89e8e104c2f5960be9d28aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_213ec727055cc0d9ece081914bbda44edd35c9bb89e8e104c2f5960be9d28aa7->leave($__internal_213ec727055cc0d9ece081914bbda44edd35c9bb89e8e104c2f5960be9d28aa7_prof);

        
        $__internal_37d43480d52d484dd2c39338f204e9e8abae5f8231fb10caa934999bc249e490->leave($__internal_37d43480d52d484dd2c39338f204e9e8abae5f8231fb10caa934999bc249e490_prof);

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
