<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d5f2eaef80767f375a47816037a9fad7e42eedff83d6802fa7deb1b76fd187f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae27326ee788165abbaac3867d8eb2f5fee6ff5a0ba89036e7f2b9270256e3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae27326ee788165abbaac3867d8eb2f5fee6ff5a0ba89036e7f2b9270256e3cc->enter($__internal_ae27326ee788165abbaac3867d8eb2f5fee6ff5a0ba89036e7f2b9270256e3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_678da285fda4f2668a8f8937126271965349d47bd7239e6f447c5a37e757fc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678da285fda4f2668a8f8937126271965349d47bd7239e6f447c5a37e757fc26->enter($__internal_678da285fda4f2668a8f8937126271965349d47bd7239e6f447c5a37e757fc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae27326ee788165abbaac3867d8eb2f5fee6ff5a0ba89036e7f2b9270256e3cc->leave($__internal_ae27326ee788165abbaac3867d8eb2f5fee6ff5a0ba89036e7f2b9270256e3cc_prof);

        
        $__internal_678da285fda4f2668a8f8937126271965349d47bd7239e6f447c5a37e757fc26->leave($__internal_678da285fda4f2668a8f8937126271965349d47bd7239e6f447c5a37e757fc26_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42d1427f27bc628f98b17df09f534532382265d9a140c354544c935a4945cdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d1427f27bc628f98b17df09f534532382265d9a140c354544c935a4945cdc3->enter($__internal_42d1427f27bc628f98b17df09f534532382265d9a140c354544c935a4945cdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b57529aa6981f561d1ebf6e912f6123db694bb58458fb78a78878b0e1d15994a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57529aa6981f561d1ebf6e912f6123db694bb58458fb78a78878b0e1d15994a->enter($__internal_b57529aa6981f561d1ebf6e912f6123db694bb58458fb78a78878b0e1d15994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b57529aa6981f561d1ebf6e912f6123db694bb58458fb78a78878b0e1d15994a->leave($__internal_b57529aa6981f561d1ebf6e912f6123db694bb58458fb78a78878b0e1d15994a_prof);

        
        $__internal_42d1427f27bc628f98b17df09f534532382265d9a140c354544c935a4945cdc3->leave($__internal_42d1427f27bc628f98b17df09f534532382265d9a140c354544c935a4945cdc3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
