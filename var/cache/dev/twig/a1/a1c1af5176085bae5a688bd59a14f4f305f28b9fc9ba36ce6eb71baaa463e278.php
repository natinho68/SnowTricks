<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_04dce6188bf89aab671423f45cf580b533129d98e369dbf6f72e4edb0549e81b extends Twig_Template
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
        $__internal_88507ad78e5a28ebc258a8a7ff0f5a4c052e6aeff9756db05ab19af43cf1a6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88507ad78e5a28ebc258a8a7ff0f5a4c052e6aeff9756db05ab19af43cf1a6d0->enter($__internal_88507ad78e5a28ebc258a8a7ff0f5a4c052e6aeff9756db05ab19af43cf1a6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0f50efa48df913f901a2b6faf644ebee42ad6b6b6b036195cbb622020863b564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f50efa48df913f901a2b6faf644ebee42ad6b6b6b036195cbb622020863b564->enter($__internal_0f50efa48df913f901a2b6faf644ebee42ad6b6b6b036195cbb622020863b564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_88507ad78e5a28ebc258a8a7ff0f5a4c052e6aeff9756db05ab19af43cf1a6d0->leave($__internal_88507ad78e5a28ebc258a8a7ff0f5a4c052e6aeff9756db05ab19af43cf1a6d0_prof);

        
        $__internal_0f50efa48df913f901a2b6faf644ebee42ad6b6b6b036195cbb622020863b564->leave($__internal_0f50efa48df913f901a2b6faf644ebee42ad6b6b6b036195cbb622020863b564_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
