<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_87763d4938b8a69549d8d249f60b1d24048edfceba0c859d6997ebb81fa85e64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_fe8c142dd51cde6b89b41a1cf147394c5559437c3b6601824787ccacbca0b4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8c142dd51cde6b89b41a1cf147394c5559437c3b6601824787ccacbca0b4a3->enter($__internal_fe8c142dd51cde6b89b41a1cf147394c5559437c3b6601824787ccacbca0b4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_8205fdb9cef63529202c6b5f13155083f8a42848c8667646af17bd7ec2a2701f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8205fdb9cef63529202c6b5f13155083f8a42848c8667646af17bd7ec2a2701f->enter($__internal_8205fdb9cef63529202c6b5f13155083f8a42848c8667646af17bd7ec2a2701f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe8c142dd51cde6b89b41a1cf147394c5559437c3b6601824787ccacbca0b4a3->leave($__internal_fe8c142dd51cde6b89b41a1cf147394c5559437c3b6601824787ccacbca0b4a3_prof);

        
        $__internal_8205fdb9cef63529202c6b5f13155083f8a42848c8667646af17bd7ec2a2701f->leave($__internal_8205fdb9cef63529202c6b5f13155083f8a42848c8667646af17bd7ec2a2701f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e0f125250a2fc774b8fc36798f95c004839123991faf7d1f4704781b8fc7914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e0f125250a2fc774b8fc36798f95c004839123991faf7d1f4704781b8fc7914->enter($__internal_1e0f125250a2fc774b8fc36798f95c004839123991faf7d1f4704781b8fc7914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5c712b2b2b1e6a4faaf4a959c17f985615ca64359c1baa614a25aac9e7a9407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c712b2b2b1e6a4faaf4a959c17f985615ca64359c1baa614a25aac9e7a9407->enter($__internal_f5c712b2b2b1e6a4faaf4a959c17f985615ca64359c1baa614a25aac9e7a9407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f5c712b2b2b1e6a4faaf4a959c17f985615ca64359c1baa614a25aac9e7a9407->leave($__internal_f5c712b2b2b1e6a4faaf4a959c17f985615ca64359c1baa614a25aac9e7a9407_prof);

        
        $__internal_1e0f125250a2fc774b8fc36798f95c004839123991faf7d1f4704781b8fc7914->leave($__internal_1e0f125250a2fc774b8fc36798f95c004839123991faf7d1f4704781b8fc7914_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
