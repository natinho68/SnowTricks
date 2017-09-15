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
        $__internal_1b694108288570e9f3c0c52b446cc5af188e925ff7d23ab779c5434651d9b991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b694108288570e9f3c0c52b446cc5af188e925ff7d23ab779c5434651d9b991->enter($__internal_1b694108288570e9f3c0c52b446cc5af188e925ff7d23ab779c5434651d9b991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $__internal_f72f2249e8efe89a226825bf188b19042eb17849fb79b4780d82c1601d09f6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f72f2249e8efe89a226825bf188b19042eb17849fb79b4780d82c1601d09f6c9->enter($__internal_f72f2249e8efe89a226825bf188b19042eb17849fb79b4780d82c1601d09f6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b694108288570e9f3c0c52b446cc5af188e925ff7d23ab779c5434651d9b991->leave($__internal_1b694108288570e9f3c0c52b446cc5af188e925ff7d23ab779c5434651d9b991_prof);

        
        $__internal_f72f2249e8efe89a226825bf188b19042eb17849fb79b4780d82c1601d09f6c9->leave($__internal_f72f2249e8efe89a226825bf188b19042eb17849fb79b4780d82c1601d09f6c9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e272015283f5f3357d91785213ced6b5becafca241985447c817b1420d4f330e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e272015283f5f3357d91785213ced6b5becafca241985447c817b1420d4f330e->enter($__internal_e272015283f5f3357d91785213ced6b5becafca241985447c817b1420d4f330e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_961baeea848395423fd955e910362a1ff1195876accae6237c2bdc516e7d42ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961baeea848395423fd955e910362a1ff1195876accae6237c2bdc516e7d42ba->enter($__internal_961baeea848395423fd955e910362a1ff1195876accae6237c2bdc516e7d42ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "UserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_961baeea848395423fd955e910362a1ff1195876accae6237c2bdc516e7d42ba->leave($__internal_961baeea848395423fd955e910362a1ff1195876accae6237c2bdc516e7d42ba_prof);

        
        $__internal_e272015283f5f3357d91785213ced6b5becafca241985447c817b1420d4f330e->leave($__internal_e272015283f5f3357d91785213ced6b5becafca241985447c817b1420d4f330e_prof);

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
