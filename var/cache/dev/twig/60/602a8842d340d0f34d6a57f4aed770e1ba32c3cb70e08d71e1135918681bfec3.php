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
        $__internal_89aa86f749d9ce65dc356024d4ace97dc78537c940edaf96d636c9497bbab3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89aa86f749d9ce65dc356024d4ace97dc78537c940edaf96d636c9497bbab3bf->enter($__internal_89aa86f749d9ce65dc356024d4ace97dc78537c940edaf96d636c9497bbab3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_1f8d120facc1f474f40156d34fb415296bdffb83d538a1f9f7c0abb669cb0626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8d120facc1f474f40156d34fb415296bdffb83d538a1f9f7c0abb669cb0626->enter($__internal_1f8d120facc1f474f40156d34fb415296bdffb83d538a1f9f7c0abb669cb0626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_89aa86f749d9ce65dc356024d4ace97dc78537c940edaf96d636c9497bbab3bf->leave($__internal_89aa86f749d9ce65dc356024d4ace97dc78537c940edaf96d636c9497bbab3bf_prof);

        
        $__internal_1f8d120facc1f474f40156d34fb415296bdffb83d538a1f9f7c0abb669cb0626->leave($__internal_1f8d120facc1f474f40156d34fb415296bdffb83d538a1f9f7c0abb669cb0626_prof);

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
