<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_b7bd604240bee50abd18b36af16d008543051fb0629316957e772ddbd10b2c80 extends Twig_Template
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
        $__internal_20e632f06f5491efaa54c36201a1bf4ed16b40a40dc54be5dd17775dfa790671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e632f06f5491efaa54c36201a1bf4ed16b40a40dc54be5dd17775dfa790671->enter($__internal_20e632f06f5491efaa54c36201a1bf4ed16b40a40dc54be5dd17775dfa790671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_16c70ad7d94f0d71eb0068f004f611d3457e1835f9a6c52d257b71eb580667bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c70ad7d94f0d71eb0068f004f611d3457e1835f9a6c52d257b71eb580667bc->enter($__internal_16c70ad7d94f0d71eb0068f004f611d3457e1835f9a6c52d257b71eb580667bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_20e632f06f5491efaa54c36201a1bf4ed16b40a40dc54be5dd17775dfa790671->leave($__internal_20e632f06f5491efaa54c36201a1bf4ed16b40a40dc54be5dd17775dfa790671_prof);

        
        $__internal_16c70ad7d94f0d71eb0068f004f611d3457e1835f9a6c52d257b71eb580667bc->leave($__internal_16c70ad7d94f0d71eb0068f004f611d3457e1835f9a6c52d257b71eb580667bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:edit_content.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit_content.html.twig");
    }
}
