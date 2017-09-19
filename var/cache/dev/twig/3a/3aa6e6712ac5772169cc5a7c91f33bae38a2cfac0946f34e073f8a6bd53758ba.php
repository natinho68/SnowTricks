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
        $__internal_c844bc4e26e90ba07302f289e15a8d58beeda20c9bc6db5dcb09de667d80017e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c844bc4e26e90ba07302f289e15a8d58beeda20c9bc6db5dcb09de667d80017e->enter($__internal_c844bc4e26e90ba07302f289e15a8d58beeda20c9bc6db5dcb09de667d80017e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_19c12e7f0cd6265977593466b37d870188658bd60551a0e563d50305620ea2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c12e7f0cd6265977593466b37d870188658bd60551a0e563d50305620ea2e0->enter($__internal_19c12e7f0cd6265977593466b37d870188658bd60551a0e563d50305620ea2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c844bc4e26e90ba07302f289e15a8d58beeda20c9bc6db5dcb09de667d80017e->leave($__internal_c844bc4e26e90ba07302f289e15a8d58beeda20c9bc6db5dcb09de667d80017e_prof);

        
        $__internal_19c12e7f0cd6265977593466b37d870188658bd60551a0e563d50305620ea2e0->leave($__internal_19c12e7f0cd6265977593466b37d870188658bd60551a0e563d50305620ea2e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c39cba105238b5868e5ca788235371dd19aab9633c9cc7802bdd5d82c93de65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c39cba105238b5868e5ca788235371dd19aab9633c9cc7802bdd5d82c93de65->enter($__internal_9c39cba105238b5868e5ca788235371dd19aab9633c9cc7802bdd5d82c93de65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee3e7fa25f14e4cfd0afc4ca8d5787f17b0b47e741d4b3460e0ff873f232c2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3e7fa25f14e4cfd0afc4ca8d5787f17b0b47e741d4b3460e0ff873f232c2dd->enter($__internal_ee3e7fa25f14e4cfd0afc4ca8d5787f17b0b47e741d4b3460e0ff873f232c2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ee3e7fa25f14e4cfd0afc4ca8d5787f17b0b47e741d4b3460e0ff873f232c2dd->leave($__internal_ee3e7fa25f14e4cfd0afc4ca8d5787f17b0b47e741d4b3460e0ff873f232c2dd_prof);

        
        $__internal_9c39cba105238b5868e5ca788235371dd19aab9633c9cc7802bdd5d82c93de65->leave($__internal_9c39cba105238b5868e5ca788235371dd19aab9633c9cc7802bdd5d82c93de65_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dad3a22f8881c6571bde663f4259796db905e383045036759091250c0dfd5c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad3a22f8881c6571bde663f4259796db905e383045036759091250c0dfd5c7c->enter($__internal_dad3a22f8881c6571bde663f4259796db905e383045036759091250c0dfd5c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30489dba881edcedd93450eeca2de3cd9145ba0ba82cf48fa3b2da36d506ebd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30489dba881edcedd93450eeca2de3cd9145ba0ba82cf48fa3b2da36d506ebd5->enter($__internal_30489dba881edcedd93450eeca2de3cd9145ba0ba82cf48fa3b2da36d506ebd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_30489dba881edcedd93450eeca2de3cd9145ba0ba82cf48fa3b2da36d506ebd5->leave($__internal_30489dba881edcedd93450eeca2de3cd9145ba0ba82cf48fa3b2da36d506ebd5_prof);

        
        $__internal_dad3a22f8881c6571bde663f4259796db905e383045036759091250c0dfd5c7c->leave($__internal_dad3a22f8881c6571bde663f4259796db905e383045036759091250c0dfd5c7c_prof);

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
