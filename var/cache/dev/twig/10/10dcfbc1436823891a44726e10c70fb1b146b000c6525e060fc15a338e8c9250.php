<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_36ea7196d08e8bba310370e57d5f781c91115dd4bff0bac696d025029cfc55eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_8ef0bdd246b1d13ba67c4381aeb09336112742d700e9f1d111ad1f7f760cb62f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef0bdd246b1d13ba67c4381aeb09336112742d700e9f1d111ad1f7f760cb62f->enter($__internal_8ef0bdd246b1d13ba67c4381aeb09336112742d700e9f1d111ad1f7f760cb62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_d01be784008f1d1516246e558c036411f6b8390c1d23c2b481c6433946a64d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01be784008f1d1516246e558c036411f6b8390c1d23c2b481c6433946a64d7e->enter($__internal_d01be784008f1d1516246e558c036411f6b8390c1d23c2b481c6433946a64d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ef0bdd246b1d13ba67c4381aeb09336112742d700e9f1d111ad1f7f760cb62f->leave($__internal_8ef0bdd246b1d13ba67c4381aeb09336112742d700e9f1d111ad1f7f760cb62f_prof);

        
        $__internal_d01be784008f1d1516246e558c036411f6b8390c1d23c2b481c6433946a64d7e->leave($__internal_d01be784008f1d1516246e558c036411f6b8390c1d23c2b481c6433946a64d7e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f11601b88837b239862e6c7c878a23b4e2a0e1291d63252a611ef70ec74aeae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f11601b88837b239862e6c7c878a23b4e2a0e1291d63252a611ef70ec74aeae->enter($__internal_9f11601b88837b239862e6c7c878a23b4e2a0e1291d63252a611ef70ec74aeae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c05572b064665a4d76fdc8923b301db91c327b3e5a0b74150491bf4c7aa7f65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05572b064665a4d76fdc8923b301db91c327b3e5a0b74150491bf4c7aa7f65b->enter($__internal_c05572b064665a4d76fdc8923b301db91c327b3e5a0b74150491bf4c7aa7f65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c05572b064665a4d76fdc8923b301db91c327b3e5a0b74150491bf4c7aa7f65b->leave($__internal_c05572b064665a4d76fdc8923b301db91c327b3e5a0b74150491bf4c7aa7f65b_prof);

        
        $__internal_9f11601b88837b239862e6c7c878a23b4e2a0e1291d63252a611ef70ec74aeae->leave($__internal_9f11601b88837b239862e6c7c878a23b4e2a0e1291d63252a611ef70ec74aeae_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
