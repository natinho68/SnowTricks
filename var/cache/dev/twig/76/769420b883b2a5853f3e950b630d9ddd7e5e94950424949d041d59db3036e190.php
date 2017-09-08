<?php

/* AppBundle:pages:delete.html.twig */
class __TwigTemplate_16e1e5ff0a97361d967f6c9c74ed012216180e2e246d5cb015c94c2a89edc9a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:pages:delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cc81357f2b0714cfb839aaadd8f00ea383c1d819ec2732781d778572562a5d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc81357f2b0714cfb839aaadd8f00ea383c1d819ec2732781d778572562a5d7->enter($__internal_9cc81357f2b0714cfb839aaadd8f00ea383c1d819ec2732781d778572562a5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:delete.html.twig"));

        $__internal_09deb15e93e01188c66cfa7ab209cac29da1a1f2d3b7ab05517deddd38ae752b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09deb15e93e01188c66cfa7ab209cac29da1a1f2d3b7ab05517deddd38ae752b->enter($__internal_09deb15e93e01188c66cfa7ab209cac29da1a1f2d3b7ab05517deddd38ae752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pages:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cc81357f2b0714cfb839aaadd8f00ea383c1d819ec2732781d778572562a5d7->leave($__internal_9cc81357f2b0714cfb839aaadd8f00ea383c1d819ec2732781d778572562a5d7_prof);

        
        $__internal_09deb15e93e01188c66cfa7ab209cac29da1a1f2d3b7ab05517deddd38ae752b->leave($__internal_09deb15e93e01188c66cfa7ab209cac29da1a1f2d3b7ab05517deddd38ae752b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e82170685df13e5351b945c346758732295e4e5403af26b4799da4e5b0bb3e10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82170685df13e5351b945c346758732295e4e5403af26b4799da4e5b0bb3e10->enter($__internal_e82170685df13e5351b945c346758732295e4e5403af26b4799da4e5b0bb3e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_85e5f928fd6f60bf7a44c5c54e733ff937558825a9a0ecbf0e066fc18f540ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e5f928fd6f60bf7a44c5c54e733ff937558825a9a0ecbf0e066fc18f540ea0->enter($__internal_85e5f928fd6f60bf7a44c5c54e733ff937558825a9a0ecbf0e066fc18f540ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Delete a trick - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_85e5f928fd6f60bf7a44c5c54e733ff937558825a9a0ecbf0e066fc18f540ea0->leave($__internal_85e5f928fd6f60bf7a44c5c54e733ff937558825a9a0ecbf0e066fc18f540ea0_prof);

        
        $__internal_e82170685df13e5351b945c346758732295e4e5403af26b4799da4e5b0bb3e10->leave($__internal_e82170685df13e5351b945c346758732295e4e5403af26b4799da4e5b0bb3e10_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_27543771c12690694ce231f0f36d5ebe66a0afe372550fc962f710042af44b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27543771c12690694ce231f0f36d5ebe66a0afe372550fc962f710042af44b0b->enter($__internal_27543771c12690694ce231f0f36d5ebe66a0afe372550fc962f710042af44b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19b68b866b55879b2a798dae64549f5914b196402f1fedbf6800650c43c5ceaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b68b866b55879b2a798dae64549f5914b196402f1fedbf6800650c43c5ceaa->enter($__internal_19b68b866b55879b2a798dae64549f5914b196402f1fedbf6800650c43c5ceaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h3>Delete a trick</h3>

    <p>
        Are you sure you want to delete the trick :  \"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "name", array()), "html", null, true);
        echo "\" ?
    </p>


    <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute((isset($context["trick"]) ? $context["trick"] : $this->getContext($context, "trick")), "slug", array()))), "html", null, true);
        echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
                Back to the trick
            </a>
        ";
        // line 20
        echo "        <input type=\"submit\" value=\"Delete\" class=\"waves-effect black btn\" />
        ";
        // line 22
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
";
        
        $__internal_19b68b866b55879b2a798dae64549f5914b196402f1fedbf6800650c43c5ceaa->leave($__internal_19b68b866b55879b2a798dae64549f5914b196402f1fedbf6800650c43c5ceaa_prof);

        
        $__internal_27543771c12690694ce231f0f36d5ebe66a0afe372550fc962f710042af44b0b->leave($__internal_27543771c12690694ce231f0f36d5ebe66a0afe372550fc962f710042af44b0b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pages:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  94 => 20,  88 => 16,  84 => 15,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block title %}
    Delete a trick - {{ parent() }}
{% endblock %}

{% block body %}
    <h3>Delete a trick</h3>

    <p>
        Are you sure you want to delete the trick :  \"{{ trick.name }}\" ?
    </p>


    <form action=\"{{ path('delete', {'id': trick.id}) }}\" method=\"post\">
            <a href=\"{{ path('view', {'slug': trick.slug}) }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
                Back to the trick
            </a>
        {# Ici j'ai écrit le bouton de soumission à la main #}
        <input type=\"submit\" value=\"Delete\" class=\"waves-effect black btn\" />
        {# Ceci va générer le champ CSRF #}
        {{ form_rest(form) }}
    </form>
{% endblock %}
", "AppBundle:pages:delete.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/delete.html.twig");
    }
}
