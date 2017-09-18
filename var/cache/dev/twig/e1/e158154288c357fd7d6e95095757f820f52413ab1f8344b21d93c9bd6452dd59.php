<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_92b2c4b4e50f874b8f58b3408bf890cbfb8607d01265f4d38109cc354eb216d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_3dc3221e3b7d3ff19995f1dc8a72f593ae864380092a54ec84dae70f0b35237e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dc3221e3b7d3ff19995f1dc8a72f593ae864380092a54ec84dae70f0b35237e->enter($__internal_3dc3221e3b7d3ff19995f1dc8a72f593ae864380092a54ec84dae70f0b35237e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_98657c2f34e0d82be4473df46e670de4a34432bac5ac636f9e22a693a55cc957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98657c2f34e0d82be4473df46e670de4a34432bac5ac636f9e22a693a55cc957->enter($__internal_98657c2f34e0d82be4473df46e670de4a34432bac5ac636f9e22a693a55cc957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc3221e3b7d3ff19995f1dc8a72f593ae864380092a54ec84dae70f0b35237e->leave($__internal_3dc3221e3b7d3ff19995f1dc8a72f593ae864380092a54ec84dae70f0b35237e_prof);

        
        $__internal_98657c2f34e0d82be4473df46e670de4a34432bac5ac636f9e22a693a55cc957->leave($__internal_98657c2f34e0d82be4473df46e670de4a34432bac5ac636f9e22a693a55cc957_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e05ac2f56e92f539c79c0758edf76560729e07d8e4c02dc2e1c4e045b3719ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e05ac2f56e92f539c79c0758edf76560729e07d8e4c02dc2e1c4e045b3719ec->enter($__internal_0e05ac2f56e92f539c79c0758edf76560729e07d8e4c02dc2e1c4e045b3719ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_690ddc9b1b1da2eeffeb9e129a6f5b469be41750d1512ad5a9767468864c784c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690ddc9b1b1da2eeffeb9e129a6f5b469be41750d1512ad5a9767468864c784c->enter($__internal_690ddc9b1b1da2eeffeb9e129a6f5b469be41750d1512ad5a9767468864c784c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_690ddc9b1b1da2eeffeb9e129a6f5b469be41750d1512ad5a9767468864c784c->leave($__internal_690ddc9b1b1da2eeffeb9e129a6f5b469be41750d1512ad5a9767468864c784c_prof);

        
        $__internal_0e05ac2f56e92f539c79c0758edf76560729e07d8e4c02dc2e1c4e045b3719ec->leave($__internal_0e05ac2f56e92f539c79c0758edf76560729e07d8e4c02dc2e1c4e045b3719ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
