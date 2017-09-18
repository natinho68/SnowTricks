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
        $__internal_be54da9139eb1cfb28a7dad99ba1274bd3b6aad275b6e8ef074428237e25a639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be54da9139eb1cfb28a7dad99ba1274bd3b6aad275b6e8ef074428237e25a639->enter($__internal_be54da9139eb1cfb28a7dad99ba1274bd3b6aad275b6e8ef074428237e25a639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_b98f71bffd033f4ff994e90f811774c5ab94b53210036fc4cee3068e270cee64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98f71bffd033f4ff994e90f811774c5ab94b53210036fc4cee3068e270cee64->enter($__internal_b98f71bffd033f4ff994e90f811774c5ab94b53210036fc4cee3068e270cee64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be54da9139eb1cfb28a7dad99ba1274bd3b6aad275b6e8ef074428237e25a639->leave($__internal_be54da9139eb1cfb28a7dad99ba1274bd3b6aad275b6e8ef074428237e25a639_prof);

        
        $__internal_b98f71bffd033f4ff994e90f811774c5ab94b53210036fc4cee3068e270cee64->leave($__internal_b98f71bffd033f4ff994e90f811774c5ab94b53210036fc4cee3068e270cee64_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14cc05fbdb193941533ab93e9885057e198df0d2ed11154d4c53dd9869f82e45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14cc05fbdb193941533ab93e9885057e198df0d2ed11154d4c53dd9869f82e45->enter($__internal_14cc05fbdb193941533ab93e9885057e198df0d2ed11154d4c53dd9869f82e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4137d595356b0adc2eb5360f2885ef9bcd75565bdedbc72097ec3352da3b93a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4137d595356b0adc2eb5360f2885ef9bcd75565bdedbc72097ec3352da3b93a2->enter($__internal_4137d595356b0adc2eb5360f2885ef9bcd75565bdedbc72097ec3352da3b93a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4137d595356b0adc2eb5360f2885ef9bcd75565bdedbc72097ec3352da3b93a2->leave($__internal_4137d595356b0adc2eb5360f2885ef9bcd75565bdedbc72097ec3352da3b93a2_prof);

        
        $__internal_14cc05fbdb193941533ab93e9885057e198df0d2ed11154d4c53dd9869f82e45->leave($__internal_14cc05fbdb193941533ab93e9885057e198df0d2ed11154d4c53dd9869f82e45_prof);

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
