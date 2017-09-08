<?php

/* UserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_0a62016173a3e5c900a12ed95790447dafc530f30de0afc8eea52c73e623625b extends Twig_Template
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
        $__internal_19bedf904c6f30c91b3d34748cb9def5e89618c61cd85df8a6565d53a34c2672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19bedf904c6f30c91b3d34748cb9def5e89618c61cd85df8a6565d53a34c2672->enter($__internal_19bedf904c6f30c91b3d34748cb9def5e89618c61cd85df8a6565d53a34c2672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit_content.html.twig"));

        $__internal_b337ccc63cae2c992ac9d736c5a024ebaf89f0a330e9e8fb4ae3805cc45aeb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b337ccc63cae2c992ac9d736c5a024ebaf89f0a330e9e8fb4ae3805cc45aeb48->enter($__internal_b337ccc63cae2c992ac9d736c5a024ebaf89f0a330e9e8fb4ae3805cc45aeb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
    <h3>Edit my profile</h3>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>

        <a href=\"#\" type=\"submit\" class=\"waves-effect black white-text btn\"><input type=\"submit\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /></a>
    </div>

";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_19bedf904c6f30c91b3d34748cb9def5e89618c61cd85df8a6565d53a34c2672->leave($__internal_19bedf904c6f30c91b3d34748cb9def5e89618c61cd85df8a6565d53a34c2672_prof);

        
        $__internal_b337ccc63cae2c992ac9d736c5a024ebaf89f0a330e9e8fb4ae3805cc45aeb48->leave($__internal_b337ccc63cae2c992ac9d736c5a024ebaf89f0a330e9e8fb4ae3805cc45aeb48_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit_content.html.twig";
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
", "UserBundle:Profile:edit_content.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
