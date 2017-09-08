<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92b2c4b4e50f874b8f58b3408bf890cbfb8607d01265f4d38109cc354eb216d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_8b5943caa0b5fed1673663304616aca81372423118caa97913fac01fabe58173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5943caa0b5fed1673663304616aca81372423118caa97913fac01fabe58173->enter($__internal_8b5943caa0b5fed1673663304616aca81372423118caa97913fac01fabe58173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_868a2576a288bcf55e4ffa85312545d85cc8bb047273f92f0b6318d608cd871f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868a2576a288bcf55e4ffa85312545d85cc8bb047273f92f0b6318d608cd871f->enter($__internal_868a2576a288bcf55e4ffa85312545d85cc8bb047273f92f0b6318d608cd871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b5943caa0b5fed1673663304616aca81372423118caa97913fac01fabe58173->leave($__internal_8b5943caa0b5fed1673663304616aca81372423118caa97913fac01fabe58173_prof);

        
        $__internal_868a2576a288bcf55e4ffa85312545d85cc8bb047273f92f0b6318d608cd871f->leave($__internal_868a2576a288bcf55e4ffa85312545d85cc8bb047273f92f0b6318d608cd871f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f516cb55b5a133de366b31ca48a966a997fd5d01c6a8ca2def216e0eac32a6cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f516cb55b5a133de366b31ca48a966a997fd5d01c6a8ca2def216e0eac32a6cb->enter($__internal_f516cb55b5a133de366b31ca48a966a997fd5d01c6a8ca2def216e0eac32a6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e676629a953af6d915b96913dd8a639d21c33657ee7c2b2a6cae7c5d44d6630f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e676629a953af6d915b96913dd8a639d21c33657ee7c2b2a6cae7c5d44d6630f->enter($__internal_e676629a953af6d915b96913dd8a639d21c33657ee7c2b2a6cae7c5d44d6630f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e676629a953af6d915b96913dd8a639d21c33657ee7c2b2a6cae7c5d44d6630f->leave($__internal_e676629a953af6d915b96913dd8a639d21c33657ee7c2b2a6cae7c5d44d6630f_prof);

        
        $__internal_f516cb55b5a133de366b31ca48a966a997fd5d01c6a8ca2def216e0eac32a6cb->leave($__internal_f516cb55b5a133de366b31ca48a966a997fd5d01c6a8ca2def216e0eac32a6cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
