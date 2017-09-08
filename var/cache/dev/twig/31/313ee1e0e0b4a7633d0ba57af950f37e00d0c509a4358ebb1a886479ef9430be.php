<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_ef47d0b258bd99b7d2e2574ed1003ec9c8fa39e315cc0c92cadb3906806dd977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c136c7bf3dd4d7f8f6144c8f02dfe2eafcd2aca2762fdbdf152261c4a8e5c355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c136c7bf3dd4d7f8f6144c8f02dfe2eafcd2aca2762fdbdf152261c4a8e5c355->enter($__internal_c136c7bf3dd4d7f8f6144c8f02dfe2eafcd2aca2762fdbdf152261c4a8e5c355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_8aab77e46b5b0c68b1624d77159a6f78083eae2044396cbc2fd5ebf80a799338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aab77e46b5b0c68b1624d77159a6f78083eae2044396cbc2fd5ebf80a799338->enter($__internal_8aab77e46b5b0c68b1624d77159a6f78083eae2044396cbc2fd5ebf80a799338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
    <h3>Edit my profile</h3>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>

        <a href=\"#\" type=\"submit\" class=\"waves-effect black white-text btn\"><input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></a>
    </div>

";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c136c7bf3dd4d7f8f6144c8f02dfe2eafcd2aca2762fdbdf152261c4a8e5c355->leave($__internal_c136c7bf3dd4d7f8f6144c8f02dfe2eafcd2aca2762fdbdf152261c4a8e5c355_prof);

        
        $__internal_8aab77e46b5b0c68b1624d77159a6f78083eae2044396cbc2fd5ebf80a799338->leave($__internal_8aab77e46b5b0c68b1624d77159a6f78083eae2044396cbc2fd5ebf80a799338_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  39 => 8,  33 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

    <h3>Edit my profile</h3>
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>

        <a href=\"#\" type=\"submit\" class=\"waves-effect black white-text btn\"><input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" /></a>
    </div>

{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
