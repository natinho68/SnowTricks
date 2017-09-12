<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f148fa25fac21362cb4bcaa877387459178e664cf878ee2ec52e0542741f1fb6 extends Twig_Template
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
        $__internal_6b04a2aabdef197fe6cc4bc1abb7f59ce6bdab06b2567701d49b4b25bb8472d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b04a2aabdef197fe6cc4bc1abb7f59ce6bdab06b2567701d49b4b25bb8472d5->enter($__internal_6b04a2aabdef197fe6cc4bc1abb7f59ce6bdab06b2567701d49b4b25bb8472d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_302716c798688a649f716f3d21c64d86e1e56b701f6d52b675a1a5263a17b6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302716c798688a649f716f3d21c64d86e1e56b701f6d52b675a1a5263a17b6cb->enter($__internal_302716c798688a649f716f3d21c64d86e1e56b701f6d52b675a1a5263a17b6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6b04a2aabdef197fe6cc4bc1abb7f59ce6bdab06b2567701d49b4b25bb8472d5->leave($__internal_6b04a2aabdef197fe6cc4bc1abb7f59ce6bdab06b2567701d49b4b25bb8472d5_prof);

        
        $__internal_302716c798688a649f716f3d21c64d86e1e56b701f6d52b675a1a5263a17b6cb->leave($__internal_302716c798688a649f716f3d21c64d86e1e56b701f6d52b675a1a5263a17b6cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
