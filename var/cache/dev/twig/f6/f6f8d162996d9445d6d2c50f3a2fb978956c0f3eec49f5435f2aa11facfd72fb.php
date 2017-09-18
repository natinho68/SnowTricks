<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_593eee9993242872a9e8bbcae414c864ad7cbe11279d476c58b37bce791ae173 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_0f7473ad5dac1b74f4364797ef246b92b128783db8fc6b4413be9813d0521c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7473ad5dac1b74f4364797ef246b92b128783db8fc6b4413be9813d0521c81->enter($__internal_0f7473ad5dac1b74f4364797ef246b92b128783db8fc6b4413be9813d0521c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_5198f0ec57eefb9f62e3069af4906849160e0fa634a1a972b84b0e64a0eb4bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5198f0ec57eefb9f62e3069af4906849160e0fa634a1a972b84b0e64a0eb4bbb->enter($__internal_5198f0ec57eefb9f62e3069af4906849160e0fa634a1a972b84b0e64a0eb4bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f7473ad5dac1b74f4364797ef246b92b128783db8fc6b4413be9813d0521c81->leave($__internal_0f7473ad5dac1b74f4364797ef246b92b128783db8fc6b4413be9813d0521c81_prof);

        
        $__internal_5198f0ec57eefb9f62e3069af4906849160e0fa634a1a972b84b0e64a0eb4bbb->leave($__internal_5198f0ec57eefb9f62e3069af4906849160e0fa634a1a972b84b0e64a0eb4bbb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cc85f529552ebc980166157d176d484522c00cdfabc1a67188a6e4c150e26bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc85f529552ebc980166157d176d484522c00cdfabc1a67188a6e4c150e26bc->enter($__internal_8cc85f529552ebc980166157d176d484522c00cdfabc1a67188a6e4c150e26bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_38cd4fe0bc3ebd382062545938b1c4e6325f711e982b0d6c84d701ceaf78b554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38cd4fe0bc3ebd382062545938b1c4e6325f711e982b0d6c84d701ceaf78b554->enter($__internal_38cd4fe0bc3ebd382062545938b1c4e6325f711e982b0d6c84d701ceaf78b554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_38cd4fe0bc3ebd382062545938b1c4e6325f711e982b0d6c84d701ceaf78b554->leave($__internal_38cd4fe0bc3ebd382062545938b1c4e6325f711e982b0d6c84d701ceaf78b554_prof);

        
        $__internal_8cc85f529552ebc980166157d176d484522c00cdfabc1a67188a6e4c150e26bc->leave($__internal_8cc85f529552ebc980166157d176d484522c00cdfabc1a67188a6e4c150e26bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
