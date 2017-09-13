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
        $__internal_c81a6a8b82e2912d26d44121183d36973ff7652c92698af7eb29d8a6c4c7353b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c81a6a8b82e2912d26d44121183d36973ff7652c92698af7eb29d8a6c4c7353b->enter($__internal_c81a6a8b82e2912d26d44121183d36973ff7652c92698af7eb29d8a6c4c7353b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_6b598886be382fb5a3ffd7e77a58c1eb679ed9f4f38bc0dd1b6147e4b89ea619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b598886be382fb5a3ffd7e77a58c1eb679ed9f4f38bc0dd1b6147e4b89ea619->enter($__internal_6b598886be382fb5a3ffd7e77a58c1eb679ed9f4f38bc0dd1b6147e4b89ea619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c81a6a8b82e2912d26d44121183d36973ff7652c92698af7eb29d8a6c4c7353b->leave($__internal_c81a6a8b82e2912d26d44121183d36973ff7652c92698af7eb29d8a6c4c7353b_prof);

        
        $__internal_6b598886be382fb5a3ffd7e77a58c1eb679ed9f4f38bc0dd1b6147e4b89ea619->leave($__internal_6b598886be382fb5a3ffd7e77a58c1eb679ed9f4f38bc0dd1b6147e4b89ea619_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26802ab8a431ccbd0580efa62c28314ca55062c7e22ee3b61741f46f8beb6211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26802ab8a431ccbd0580efa62c28314ca55062c7e22ee3b61741f46f8beb6211->enter($__internal_26802ab8a431ccbd0580efa62c28314ca55062c7e22ee3b61741f46f8beb6211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad9e9e67f8fcb212947da9f1b7cf698bc3c6f352c94e78af4ce5bf1638631644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9e9e67f8fcb212947da9f1b7cf698bc3c6f352c94e78af4ce5bf1638631644->enter($__internal_ad9e9e67f8fcb212947da9f1b7cf698bc3c6f352c94e78af4ce5bf1638631644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ad9e9e67f8fcb212947da9f1b7cf698bc3c6f352c94e78af4ce5bf1638631644->leave($__internal_ad9e9e67f8fcb212947da9f1b7cf698bc3c6f352c94e78af4ce5bf1638631644_prof);

        
        $__internal_26802ab8a431ccbd0580efa62c28314ca55062c7e22ee3b61741f46f8beb6211->leave($__internal_26802ab8a431ccbd0580efa62c28314ca55062c7e22ee3b61741f46f8beb6211_prof);

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
