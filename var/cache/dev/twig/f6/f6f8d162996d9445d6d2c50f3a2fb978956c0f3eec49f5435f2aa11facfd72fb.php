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
        $__internal_0190dc27c6db3a66a736921f2f1b58cd9d3588d7b12a10b1c5c6b5c14122b127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0190dc27c6db3a66a736921f2f1b58cd9d3588d7b12a10b1c5c6b5c14122b127->enter($__internal_0190dc27c6db3a66a736921f2f1b58cd9d3588d7b12a10b1c5c6b5c14122b127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_648866208d52dc02fad573970b456406217d3ef67f8afdc944ddb1a71a7d287f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648866208d52dc02fad573970b456406217d3ef67f8afdc944ddb1a71a7d287f->enter($__internal_648866208d52dc02fad573970b456406217d3ef67f8afdc944ddb1a71a7d287f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0190dc27c6db3a66a736921f2f1b58cd9d3588d7b12a10b1c5c6b5c14122b127->leave($__internal_0190dc27c6db3a66a736921f2f1b58cd9d3588d7b12a10b1c5c6b5c14122b127_prof);

        
        $__internal_648866208d52dc02fad573970b456406217d3ef67f8afdc944ddb1a71a7d287f->leave($__internal_648866208d52dc02fad573970b456406217d3ef67f8afdc944ddb1a71a7d287f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98967e513329e475a0ea182d03881ba9dca688b56b1f4128c52af4bb131d5546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98967e513329e475a0ea182d03881ba9dca688b56b1f4128c52af4bb131d5546->enter($__internal_98967e513329e475a0ea182d03881ba9dca688b56b1f4128c52af4bb131d5546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_418cfd26b5507e3da5fa738f75430a20d1379aee8201f905f7c07938200c7c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418cfd26b5507e3da5fa738f75430a20d1379aee8201f905f7c07938200c7c3c->enter($__internal_418cfd26b5507e3da5fa738f75430a20d1379aee8201f905f7c07938200c7c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_418cfd26b5507e3da5fa738f75430a20d1379aee8201f905f7c07938200c7c3c->leave($__internal_418cfd26b5507e3da5fa738f75430a20d1379aee8201f905f7c07938200c7c3c_prof);

        
        $__internal_98967e513329e475a0ea182d03881ba9dca688b56b1f4128c52af4bb131d5546->leave($__internal_98967e513329e475a0ea182d03881ba9dca688b56b1f4128c52af4bb131d5546_prof);

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
