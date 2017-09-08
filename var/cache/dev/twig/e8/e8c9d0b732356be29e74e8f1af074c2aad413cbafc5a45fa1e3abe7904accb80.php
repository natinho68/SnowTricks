<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d7477e85ff500e2feb3384e4772495977957dfde0ac620b81004c083288b09e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_17ba4e93065d6511db36e11ef82489b32f96958727b2edb03d21908272a052e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ba4e93065d6511db36e11ef82489b32f96958727b2edb03d21908272a052e9->enter($__internal_17ba4e93065d6511db36e11ef82489b32f96958727b2edb03d21908272a052e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_012f97d25f748217bddcb6367add72f6c6eab7691f3dd04224ae75c4194cd537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012f97d25f748217bddcb6367add72f6c6eab7691f3dd04224ae75c4194cd537->enter($__internal_012f97d25f748217bddcb6367add72f6c6eab7691f3dd04224ae75c4194cd537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17ba4e93065d6511db36e11ef82489b32f96958727b2edb03d21908272a052e9->leave($__internal_17ba4e93065d6511db36e11ef82489b32f96958727b2edb03d21908272a052e9_prof);

        
        $__internal_012f97d25f748217bddcb6367add72f6c6eab7691f3dd04224ae75c4194cd537->leave($__internal_012f97d25f748217bddcb6367add72f6c6eab7691f3dd04224ae75c4194cd537_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ee13b3466e48fc0fedb87bab2f5a25acb969d095a83a70e4c7718440623a02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee13b3466e48fc0fedb87bab2f5a25acb969d095a83a70e4c7718440623a02f->enter($__internal_5ee13b3466e48fc0fedb87bab2f5a25acb969d095a83a70e4c7718440623a02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6588223da68d4e21d1c9c84bf1cfb17452403c0579a7247f8fe1b8a9d0699153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6588223da68d4e21d1c9c84bf1cfb17452403c0579a7247f8fe1b8a9d0699153->enter($__internal_6588223da68d4e21d1c9c84bf1cfb17452403c0579a7247f8fe1b8a9d0699153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6588223da68d4e21d1c9c84bf1cfb17452403c0579a7247f8fe1b8a9d0699153->leave($__internal_6588223da68d4e21d1c9c84bf1cfb17452403c0579a7247f8fe1b8a9d0699153_prof);

        
        $__internal_5ee13b3466e48fc0fedb87bab2f5a25acb969d095a83a70e4c7718440623a02f->leave($__internal_5ee13b3466e48fc0fedb87bab2f5a25acb969d095a83a70e4c7718440623a02f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
