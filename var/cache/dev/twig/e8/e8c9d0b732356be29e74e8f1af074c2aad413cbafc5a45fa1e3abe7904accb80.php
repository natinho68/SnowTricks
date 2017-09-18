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
        $__internal_709ebacc5851e8a09d4da34e3b339aa9ac1a846a2b6cd5182616e38665e50bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709ebacc5851e8a09d4da34e3b339aa9ac1a846a2b6cd5182616e38665e50bde->enter($__internal_709ebacc5851e8a09d4da34e3b339aa9ac1a846a2b6cd5182616e38665e50bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_432c38d849c26f8c92e2d5f76c7ad1a33dca49587cf7831e5d1091067c8f8cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432c38d849c26f8c92e2d5f76c7ad1a33dca49587cf7831e5d1091067c8f8cca->enter($__internal_432c38d849c26f8c92e2d5f76c7ad1a33dca49587cf7831e5d1091067c8f8cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_709ebacc5851e8a09d4da34e3b339aa9ac1a846a2b6cd5182616e38665e50bde->leave($__internal_709ebacc5851e8a09d4da34e3b339aa9ac1a846a2b6cd5182616e38665e50bde_prof);

        
        $__internal_432c38d849c26f8c92e2d5f76c7ad1a33dca49587cf7831e5d1091067c8f8cca->leave($__internal_432c38d849c26f8c92e2d5f76c7ad1a33dca49587cf7831e5d1091067c8f8cca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63cf81defbdbeaba98e33ec5b8c12a9c57aedd597f4bac21dd206fb346d389ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cf81defbdbeaba98e33ec5b8c12a9c57aedd597f4bac21dd206fb346d389ba->enter($__internal_63cf81defbdbeaba98e33ec5b8c12a9c57aedd597f4bac21dd206fb346d389ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e898f30a8c85d358e73704a63c0a240f9b62933f800d28a845da43ec2f92137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e898f30a8c85d358e73704a63c0a240f9b62933f800d28a845da43ec2f92137->enter($__internal_6e898f30a8c85d358e73704a63c0a240f9b62933f800d28a845da43ec2f92137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_6e898f30a8c85d358e73704a63c0a240f9b62933f800d28a845da43ec2f92137->leave($__internal_6e898f30a8c85d358e73704a63c0a240f9b62933f800d28a845da43ec2f92137_prof);

        
        $__internal_63cf81defbdbeaba98e33ec5b8c12a9c57aedd597f4bac21dd206fb346d389ba->leave($__internal_63cf81defbdbeaba98e33ec5b8c12a9c57aedd597f4bac21dd206fb346d389ba_prof);

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
