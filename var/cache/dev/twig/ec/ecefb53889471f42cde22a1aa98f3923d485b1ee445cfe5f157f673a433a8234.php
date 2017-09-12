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
        $__internal_54304681fb8d375600f1ced8f4c804f50e7ee0231b7152a8f3c13f20f421ee1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54304681fb8d375600f1ced8f4c804f50e7ee0231b7152a8f3c13f20f421ee1a->enter($__internal_54304681fb8d375600f1ced8f4c804f50e7ee0231b7152a8f3c13f20f421ee1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_543d5d33085e4466ba4577c7a37b18b75960d56e1b4fd8370bfaa89264072114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543d5d33085e4466ba4577c7a37b18b75960d56e1b4fd8370bfaa89264072114->enter($__internal_543d5d33085e4466ba4577c7a37b18b75960d56e1b4fd8370bfaa89264072114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54304681fb8d375600f1ced8f4c804f50e7ee0231b7152a8f3c13f20f421ee1a->leave($__internal_54304681fb8d375600f1ced8f4c804f50e7ee0231b7152a8f3c13f20f421ee1a_prof);

        
        $__internal_543d5d33085e4466ba4577c7a37b18b75960d56e1b4fd8370bfaa89264072114->leave($__internal_543d5d33085e4466ba4577c7a37b18b75960d56e1b4fd8370bfaa89264072114_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3cc463e092f7fc6870b9e00a21aa00b88800c2213f299c91c229a8eac565ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3cc463e092f7fc6870b9e00a21aa00b88800c2213f299c91c229a8eac565ad6->enter($__internal_f3cc463e092f7fc6870b9e00a21aa00b88800c2213f299c91c229a8eac565ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac918d12b8d0a506335fafd318f38081b23d0c6937e45f97fe6bb964d2a900d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac918d12b8d0a506335fafd318f38081b23d0c6937e45f97fe6bb964d2a900d1->enter($__internal_ac918d12b8d0a506335fafd318f38081b23d0c6937e45f97fe6bb964d2a900d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ac918d12b8d0a506335fafd318f38081b23d0c6937e45f97fe6bb964d2a900d1->leave($__internal_ac918d12b8d0a506335fafd318f38081b23d0c6937e45f97fe6bb964d2a900d1_prof);

        
        $__internal_f3cc463e092f7fc6870b9e00a21aa00b88800c2213f299c91c229a8eac565ad6->leave($__internal_f3cc463e092f7fc6870b9e00a21aa00b88800c2213f299c91c229a8eac565ad6_prof);

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
