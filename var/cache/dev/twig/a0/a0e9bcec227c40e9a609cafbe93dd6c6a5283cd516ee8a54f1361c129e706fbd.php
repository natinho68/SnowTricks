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
        $__internal_f1f629db688cb1db780c1884e770eb541ea931bb75546afbe5214031b9ea9270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f629db688cb1db780c1884e770eb541ea931bb75546afbe5214031b9ea9270->enter($__internal_f1f629db688cb1db780c1884e770eb541ea931bb75546afbe5214031b9ea9270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_97031dd71bc0259d0fffbc946f00344ab8974106a1e6f300a656005601ae2267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97031dd71bc0259d0fffbc946f00344ab8974106a1e6f300a656005601ae2267->enter($__internal_97031dd71bc0259d0fffbc946f00344ab8974106a1e6f300a656005601ae2267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f1f629db688cb1db780c1884e770eb541ea931bb75546afbe5214031b9ea9270->leave($__internal_f1f629db688cb1db780c1884e770eb541ea931bb75546afbe5214031b9ea9270_prof);

        
        $__internal_97031dd71bc0259d0fffbc946f00344ab8974106a1e6f300a656005601ae2267->leave($__internal_97031dd71bc0259d0fffbc946f00344ab8974106a1e6f300a656005601ae2267_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0d09f1fb2231af24773004ff048b4fd181c463c0d6697ba34e11fca2d97ff3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d09f1fb2231af24773004ff048b4fd181c463c0d6697ba34e11fca2d97ff3d->enter($__internal_c0d09f1fb2231af24773004ff048b4fd181c463c0d6697ba34e11fca2d97ff3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_36d99d520dee8b423605bc5dd2d848528f83a4913bcebce983e01ef6e4411095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d99d520dee8b423605bc5dd2d848528f83a4913bcebce983e01ef6e4411095->enter($__internal_36d99d520dee8b423605bc5dd2d848528f83a4913bcebce983e01ef6e4411095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_36d99d520dee8b423605bc5dd2d848528f83a4913bcebce983e01ef6e4411095->leave($__internal_36d99d520dee8b423605bc5dd2d848528f83a4913bcebce983e01ef6e4411095_prof);

        
        $__internal_c0d09f1fb2231af24773004ff048b4fd181c463c0d6697ba34e11fca2d97ff3d->leave($__internal_c0d09f1fb2231af24773004ff048b4fd181c463c0d6697ba34e11fca2d97ff3d_prof);

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
