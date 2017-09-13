<?php

/* ::fields.html.twig */
class __TwigTemplate_1736cb7dd08582ac4c7a000bba760c587b984f02fec0558d37bffa2dabbf4981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'file_widget' => array($this, 'block_file_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0958c0745d435ce5c646a127004d9b28c6ab04a799a891fb6168cafc99c66440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0958c0745d435ce5c646a127004d9b28c6ab04a799a891fb6168cafc99c66440->enter($__internal_0958c0745d435ce5c646a127004d9b28c6ab04a799a891fb6168cafc99c66440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        $__internal_425397d098837982b93b4f22a44c1836c350be0922eae7ea8c87454ae1855d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425397d098837982b93b4f22a44c1836c350be0922eae7ea8c87454ae1855d11->enter($__internal_425397d098837982b93b4f22a44c1836c350be0922eae7ea8c87454ae1855d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::fields.html.twig"));

        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
        
        $__internal_0958c0745d435ce5c646a127004d9b28c6ab04a799a891fb6168cafc99c66440->leave($__internal_0958c0745d435ce5c646a127004d9b28c6ab04a799a891fb6168cafc99c66440_prof);

        
        $__internal_425397d098837982b93b4f22a44c1836c350be0922eae7ea8c87454ae1855d11->leave($__internal_425397d098837982b93b4f22a44c1836c350be0922eae7ea8c87454ae1855d11_prof);

    }

    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_c130d988f919bdae8285c474569748b649d810c9ca6fee93dd2703b85e055a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c130d988f919bdae8285c474569748b649d810c9ca6fee93dd2703b85e055a71->enter($__internal_c130d988f919bdae8285c474569748b649d810c9ca6fee93dd2703b85e055a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_bb56b66557fa2bfa0814147ff535a6155e8259fbe7df7461e7ad155f5ad20a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb56b66557fa2bfa0814147ff535a6155e8259fbe7df7461e7ad155f5ad20a7c->enter($__internal_bb56b66557fa2bfa0814147ff535a6155e8259fbe7df7461e7ad155f5ad20a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "

        ";
        // line 5
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
        ";
        // line 6
        if ( !(null === (isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url")))) {
            // line 7
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["image_url"]) ? $context["image_url"] : $this->getContext($context, "image_url"))), "html", null, true);
            echo "\" width=\"150\" height=\"150\"/>
        ";
        }
        // line 9
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bb56b66557fa2bfa0814147ff535a6155e8259fbe7df7461e7ad155f5ad20a7c->leave($__internal_bb56b66557fa2bfa0814147ff535a6155e8259fbe7df7461e7ad155f5ad20a7c_prof);

        
        $__internal_c130d988f919bdae8285c474569748b649d810c9ca6fee93dd2703b85e055a71->leave($__internal_c130d988f919bdae8285c474569748b649d810c9ca6fee93dd2703b85e055a71_prof);

    }

    public function getTemplateName()
    {
        return "::fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  57 => 7,  55 => 6,  51 => 5,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block file_widget %}
    {% spaceless %}


        {{ block('form_widget') }}
        {% if image_url is not null %}
            <img src=\"{{ asset(image_url) }}\" width=\"150\" height=\"150\"/>
        {% endif %}

    {% endspaceless %}
{% endblock %}
", "::fields.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/views/fields.html.twig");
    }
}
