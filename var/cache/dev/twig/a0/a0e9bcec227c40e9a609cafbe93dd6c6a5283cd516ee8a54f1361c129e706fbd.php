<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e0af928166cb9fef112792e9d86f25507714feb76f468929df08c918305c15ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62d223ec661d1fb107c4d91524760beb403ba4aab53421f12f0c803dea8ec261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d223ec661d1fb107c4d91524760beb403ba4aab53421f12f0c803dea8ec261->enter($__internal_62d223ec661d1fb107c4d91524760beb403ba4aab53421f12f0c803dea8ec261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_bdc8b1c2b02af2cce38b6d47bfc110d0147978d40a2266159d94b5e7279075d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc8b1c2b02af2cce38b6d47bfc110d0147978d40a2266159d94b5e7279075d2->enter($__internal_bdc8b1c2b02af2cce38b6d47bfc110d0147978d40a2266159d94b5e7279075d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_62d223ec661d1fb107c4d91524760beb403ba4aab53421f12f0c803dea8ec261->leave($__internal_62d223ec661d1fb107c4d91524760beb403ba4aab53421f12f0c803dea8ec261_prof);

        
        $__internal_bdc8b1c2b02af2cce38b6d47bfc110d0147978d40a2266159d94b5e7279075d2->leave($__internal_bdc8b1c2b02af2cce38b6d47bfc110d0147978d40a2266159d94b5e7279075d2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3563cb1adde84c3adac711eb4ff513f1c3269b81fe2037ba1fb02e054a114ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3563cb1adde84c3adac711eb4ff513f1c3269b81fe2037ba1fb02e054a114ad6->enter($__internal_3563cb1adde84c3adac711eb4ff513f1c3269b81fe2037ba1fb02e054a114ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7bd3ddf21d91c711167bcb46b881dcb71e42325ee5dbeb9f86c4b85949320ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd3ddf21d91c711167bcb46b881dcb71e42325ee5dbeb9f86c4b85949320ea4->enter($__internal_7bd3ddf21d91c711167bcb46b881dcb71e42325ee5dbeb9f86c4b85949320ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7bd3ddf21d91c711167bcb46b881dcb71e42325ee5dbeb9f86c4b85949320ea4->leave($__internal_7bd3ddf21d91c711167bcb46b881dcb71e42325ee5dbeb9f86c4b85949320ea4_prof);

        
        $__internal_3563cb1adde84c3adac711eb4ff513f1c3269b81fe2037ba1fb02e054a114ad6->leave($__internal_3563cb1adde84c3adac711eb4ff513f1c3269b81fe2037ba1fb02e054a114ad6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
