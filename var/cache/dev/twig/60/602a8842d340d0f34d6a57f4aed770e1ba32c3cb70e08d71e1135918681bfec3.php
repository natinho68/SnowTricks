<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_59ac452d7b6fe043af2e999a7a4a1daae2629df18965a14e2fd59f3dd44a6d76 extends Twig_Template
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
        $__internal_0b7a41f1180a4a5a2da60f5d59855e219317e45750aeb582cd661835fd58a110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7a41f1180a4a5a2da60f5d59855e219317e45750aeb582cd661835fd58a110->enter($__internal_0b7a41f1180a4a5a2da60f5d59855e219317e45750aeb582cd661835fd58a110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8a1ec7bf3d26dcf2303b411274e72470675e1b2996cc85eacd07c9a807c0786b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1ec7bf3d26dcf2303b411274e72470675e1b2996cc85eacd07c9a807c0786b->enter($__internal_8a1ec7bf3d26dcf2303b411274e72470675e1b2996cc85eacd07c9a807c0786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0b7a41f1180a4a5a2da60f5d59855e219317e45750aeb582cd661835fd58a110->leave($__internal_0b7a41f1180a4a5a2da60f5d59855e219317e45750aeb582cd661835fd58a110_prof);

        
        $__internal_8a1ec7bf3d26dcf2303b411274e72470675e1b2996cc85eacd07c9a807c0786b->leave($__internal_8a1ec7bf3d26dcf2303b411274e72470675e1b2996cc85eacd07c9a807c0786b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
