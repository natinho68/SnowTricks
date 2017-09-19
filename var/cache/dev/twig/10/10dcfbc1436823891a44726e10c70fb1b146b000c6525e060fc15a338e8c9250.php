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
        $__internal_ed6f480b5a04654c803fcedb098204a9c5af0bb7a6738c9cf252214daeb9118f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed6f480b5a04654c803fcedb098204a9c5af0bb7a6738c9cf252214daeb9118f->enter($__internal_ed6f480b5a04654c803fcedb098204a9c5af0bb7a6738c9cf252214daeb9118f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_69b1d6f6647e777b4f7810ea4081075fb55e2024e2951982813831fcffd481de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b1d6f6647e777b4f7810ea4081075fb55e2024e2951982813831fcffd481de->enter($__internal_69b1d6f6647e777b4f7810ea4081075fb55e2024e2951982813831fcffd481de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6f480b5a04654c803fcedb098204a9c5af0bb7a6738c9cf252214daeb9118f->leave($__internal_ed6f480b5a04654c803fcedb098204a9c5af0bb7a6738c9cf252214daeb9118f_prof);

        
        $__internal_69b1d6f6647e777b4f7810ea4081075fb55e2024e2951982813831fcffd481de->leave($__internal_69b1d6f6647e777b4f7810ea4081075fb55e2024e2951982813831fcffd481de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9c08c9634f788170de467b50670366f3d24e2a40d6fba8bafe0d66f417a7799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c08c9634f788170de467b50670366f3d24e2a40d6fba8bafe0d66f417a7799->enter($__internal_d9c08c9634f788170de467b50670366f3d24e2a40d6fba8bafe0d66f417a7799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_15e1c82c2819541bd36f1f100ff445358bee6932ee92616e9b9f5ea8cd1135d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e1c82c2819541bd36f1f100ff445358bee6932ee92616e9b9f5ea8cd1135d4->enter($__internal_15e1c82c2819541bd36f1f100ff445358bee6932ee92616e9b9f5ea8cd1135d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_15e1c82c2819541bd36f1f100ff445358bee6932ee92616e9b9f5ea8cd1135d4->leave($__internal_15e1c82c2819541bd36f1f100ff445358bee6932ee92616e9b9f5ea8cd1135d4_prof);

        
        $__internal_d9c08c9634f788170de467b50670366f3d24e2a40d6fba8bafe0d66f417a7799->leave($__internal_d9c08c9634f788170de467b50670366f3d24e2a40d6fba8bafe0d66f417a7799_prof);

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
