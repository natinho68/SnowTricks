<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d5f2eaef80767f375a47816037a9fad7e42eedff83d6802fa7deb1b76fd187f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4835edc1f9e887131f6f3edb7e0d6060580770f9fa79c3e9261b5ab3e0905f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4835edc1f9e887131f6f3edb7e0d6060580770f9fa79c3e9261b5ab3e0905f49->enter($__internal_4835edc1f9e887131f6f3edb7e0d6060580770f9fa79c3e9261b5ab3e0905f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_bb67609b3697666f1caa6843baa4b7d4d47dc7fdfdf25980d6892c4229243b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb67609b3697666f1caa6843baa4b7d4d47dc7fdfdf25980d6892c4229243b58->enter($__internal_bb67609b3697666f1caa6843baa4b7d4d47dc7fdfdf25980d6892c4229243b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4835edc1f9e887131f6f3edb7e0d6060580770f9fa79c3e9261b5ab3e0905f49->leave($__internal_4835edc1f9e887131f6f3edb7e0d6060580770f9fa79c3e9261b5ab3e0905f49_prof);

        
        $__internal_bb67609b3697666f1caa6843baa4b7d4d47dc7fdfdf25980d6892c4229243b58->leave($__internal_bb67609b3697666f1caa6843baa4b7d4d47dc7fdfdf25980d6892c4229243b58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97fd60d989f1f96419907700426c6debe197a9de0c7356d2b0064ad5695d0bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fd60d989f1f96419907700426c6debe197a9de0c7356d2b0064ad5695d0bb9->enter($__internal_97fd60d989f1f96419907700426c6debe197a9de0c7356d2b0064ad5695d0bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b891bc6038842272c73f92732519a645c0c27c2ce0c4ee1c8210b07ada1d5496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b891bc6038842272c73f92732519a645c0c27c2ce0c4ee1c8210b07ada1d5496->enter($__internal_b891bc6038842272c73f92732519a645c0c27c2ce0c4ee1c8210b07ada1d5496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b891bc6038842272c73f92732519a645c0c27c2ce0c4ee1c8210b07ada1d5496->leave($__internal_b891bc6038842272c73f92732519a645c0c27c2ce0c4ee1c8210b07ada1d5496_prof);

        
        $__internal_97fd60d989f1f96419907700426c6debe197a9de0c7356d2b0064ad5695d0bb9->leave($__internal_97fd60d989f1f96419907700426c6debe197a9de0c7356d2b0064ad5695d0bb9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
