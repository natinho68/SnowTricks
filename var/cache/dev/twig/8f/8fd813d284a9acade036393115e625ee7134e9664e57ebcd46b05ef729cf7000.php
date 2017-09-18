<?php

/* UserBundle:Profile:edit.html.twig */
class __TwigTemplate_dc265bafac2c1f716a9f87c703e742e29d919751276d3bc9ca2c1ef648d59478 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "UserBundle:Profile:edit.html.twig", 1);
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
        $__internal_cba0b8351b9d9d896f43d0706c1ce2b7c8ac36da4478c84b60a512aab49bd0f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba0b8351b9d9d896f43d0706c1ce2b7c8ac36da4478c84b60a512aab49bd0f9->enter($__internal_cba0b8351b9d9d896f43d0706c1ce2b7c8ac36da4478c84b60a512aab49bd0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_7de92c81e1e715b1ddc604ea1b23db693d3c9ace9ad35e929bee41ce4af50ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de92c81e1e715b1ddc604ea1b23db693d3c9ace9ad35e929bee41ce4af50ecc->enter($__internal_7de92c81e1e715b1ddc604ea1b23db693d3c9ace9ad35e929bee41ce4af50ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cba0b8351b9d9d896f43d0706c1ce2b7c8ac36da4478c84b60a512aab49bd0f9->leave($__internal_cba0b8351b9d9d896f43d0706c1ce2b7c8ac36da4478c84b60a512aab49bd0f9_prof);

        
        $__internal_7de92c81e1e715b1ddc604ea1b23db693d3c9ace9ad35e929bee41ce4af50ecc->leave($__internal_7de92c81e1e715b1ddc604ea1b23db693d3c9ace9ad35e929bee41ce4af50ecc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e59a8b4543be14f8b6658436c57ff5bbc27b1a40fad346c900b56c9bc616464d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59a8b4543be14f8b6658436c57ff5bbc27b1a40fad346c900b56c9bc616464d->enter($__internal_e59a8b4543be14f8b6658436c57ff5bbc27b1a40fad346c900b56c9bc616464d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4972abe31a8e290613d1d924b6a76d7e7295cb10951355277e6aeb83037d683d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4972abe31a8e290613d1d924b6a76d7e7295cb10951355277e6aeb83037d683d->enter($__internal_4972abe31a8e290613d1d924b6a76d7e7295cb10951355277e6aeb83037d683d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4972abe31a8e290613d1d924b6a76d7e7295cb10951355277e6aeb83037d683d->leave($__internal_4972abe31a8e290613d1d924b6a76d7e7295cb10951355277e6aeb83037d683d_prof);

        
        $__internal_e59a8b4543be14f8b6658436c57ff5bbc27b1a40fad346c900b56c9bc616464d->leave($__internal_e59a8b4543be14f8b6658436c57ff5bbc27b1a40fad346c900b56c9bc616464d_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "UserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
