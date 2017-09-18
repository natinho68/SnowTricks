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
        $__internal_b9e321b84adc97d1a6b497aef692c719414fb0540e0e733ceb2d0ef9b8ea0cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e321b84adc97d1a6b497aef692c719414fb0540e0e733ceb2d0ef9b8ea0cfa->enter($__internal_b9e321b84adc97d1a6b497aef692c719414fb0540e0e733ceb2d0ef9b8ea0cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_1577dad6d05f4bd506d1fd35801dca4d6a081de23bea9684e0196a7809d00937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1577dad6d05f4bd506d1fd35801dca4d6a081de23bea9684e0196a7809d00937->enter($__internal_1577dad6d05f4bd506d1fd35801dca4d6a081de23bea9684e0196a7809d00937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e321b84adc97d1a6b497aef692c719414fb0540e0e733ceb2d0ef9b8ea0cfa->leave($__internal_b9e321b84adc97d1a6b497aef692c719414fb0540e0e733ceb2d0ef9b8ea0cfa_prof);

        
        $__internal_1577dad6d05f4bd506d1fd35801dca4d6a081de23bea9684e0196a7809d00937->leave($__internal_1577dad6d05f4bd506d1fd35801dca4d6a081de23bea9684e0196a7809d00937_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1fe514e6eba00313f689c5de848492b61c7438b5df9df5d0f6cff0348c416c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1fe514e6eba00313f689c5de848492b61c7438b5df9df5d0f6cff0348c416c4->enter($__internal_d1fe514e6eba00313f689c5de848492b61c7438b5df9df5d0f6cff0348c416c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_38e0dad96ff4488f5585aae280a826651d9a7750fcd2bd75fc902fcf402aab41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e0dad96ff4488f5585aae280a826651d9a7750fcd2bd75fc902fcf402aab41->enter($__internal_38e0dad96ff4488f5585aae280a826651d9a7750fcd2bd75fc902fcf402aab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_38e0dad96ff4488f5585aae280a826651d9a7750fcd2bd75fc902fcf402aab41->leave($__internal_38e0dad96ff4488f5585aae280a826651d9a7750fcd2bd75fc902fcf402aab41_prof);

        
        $__internal_d1fe514e6eba00313f689c5de848492b61c7438b5df9df5d0f6cff0348c416c4->leave($__internal_d1fe514e6eba00313f689c5de848492b61c7438b5df9df5d0f6cff0348c416c4_prof);

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
