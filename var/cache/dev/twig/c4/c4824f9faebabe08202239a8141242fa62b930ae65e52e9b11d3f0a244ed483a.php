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
        $__internal_cf4d514ced51809b67ef16b54b72abec62be487cde60f254f6f7148add222ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4d514ced51809b67ef16b54b72abec62be487cde60f254f6f7148add222ff5->enter($__internal_cf4d514ced51809b67ef16b54b72abec62be487cde60f254f6f7148add222ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit_content.html.twig"));

        $__internal_ce6db56298d1ceb6f282326f1a87e86584b798df7783f9f269443263d7602ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6db56298d1ceb6f282326f1a87e86584b798df7783f9f269443263d7602ea4->enter($__internal_ce6db56298d1ceb6f282326f1a87e86584b798df7783f9f269443263d7602ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit_content.html.twig"));

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
        
        $__internal_cf4d514ced51809b67ef16b54b72abec62be487cde60f254f6f7148add222ff5->leave($__internal_cf4d514ced51809b67ef16b54b72abec62be487cde60f254f6f7148add222ff5_prof);

        
        $__internal_ce6db56298d1ceb6f282326f1a87e86584b798df7783f9f269443263d7602ea4->leave($__internal_ce6db56298d1ceb6f282326f1a87e86584b798df7783f9f269443263d7602ea4_prof);

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
