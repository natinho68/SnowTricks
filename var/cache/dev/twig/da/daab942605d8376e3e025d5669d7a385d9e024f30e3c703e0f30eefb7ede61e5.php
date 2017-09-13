<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_aa2bd50c6cba0a8439cc67d22b7a49edd8ddcfe04aeeb076ade1dcf46bc46f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_eefb006033f57553de77da22b3434c830ea8ad33cc774d4e66316b6c8deb0e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefb006033f57553de77da22b3434c830ea8ad33cc774d4e66316b6c8deb0e69->enter($__internal_eefb006033f57553de77da22b3434c830ea8ad33cc774d4e66316b6c8deb0e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_6b979df9bc587a43a052d99dbf82a2e59140f24336a39c69f084f337b3bd0aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b979df9bc587a43a052d99dbf82a2e59140f24336a39c69f084f337b3bd0aab->enter($__internal_6b979df9bc587a43a052d99dbf82a2e59140f24336a39c69f084f337b3bd0aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eefb006033f57553de77da22b3434c830ea8ad33cc774d4e66316b6c8deb0e69->leave($__internal_eefb006033f57553de77da22b3434c830ea8ad33cc774d4e66316b6c8deb0e69_prof);

        
        $__internal_6b979df9bc587a43a052d99dbf82a2e59140f24336a39c69f084f337b3bd0aab->leave($__internal_6b979df9bc587a43a052d99dbf82a2e59140f24336a39c69f084f337b3bd0aab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc3cba194e09d37d187feb70afaa202607ece0852b51643361ef0380cda47602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3cba194e09d37d187feb70afaa202607ece0852b51643361ef0380cda47602->enter($__internal_fc3cba194e09d37d187feb70afaa202607ece0852b51643361ef0380cda47602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a84a7f105b2d33a934b470b5ad3da3d2852a4ccd9c581804aa65f0d22720258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a84a7f105b2d33a934b470b5ad3da3d2852a4ccd9c581804aa65f0d22720258->enter($__internal_9a84a7f105b2d33a934b470b5ad3da3d2852a4ccd9c581804aa65f0d22720258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9a84a7f105b2d33a934b470b5ad3da3d2852a4ccd9c581804aa65f0d22720258->leave($__internal_9a84a7f105b2d33a934b470b5ad3da3d2852a4ccd9c581804aa65f0d22720258_prof);

        
        $__internal_fc3cba194e09d37d187feb70afaa202607ece0852b51643361ef0380cda47602->leave($__internal_fc3cba194e09d37d187feb70afaa202607ece0852b51643361ef0380cda47602_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
