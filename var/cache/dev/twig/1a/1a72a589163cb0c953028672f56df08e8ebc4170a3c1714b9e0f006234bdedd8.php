<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_24828bd1125ef69f12debff2bae7e8939b81b1fcafe0c42b4f612c42ac34bc26 extends Twig_Template
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
        $__internal_0ce52aa1b6075033a762c889759284ad25d487e25638452b16516f2401d7e7bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ce52aa1b6075033a762c889759284ad25d487e25638452b16516f2401d7e7bd->enter($__internal_0ce52aa1b6075033a762c889759284ad25d487e25638452b16516f2401d7e7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a4fd7b1a4e1905df53da81ff65a4b5857423da77590a41967d013b6956374c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fd7b1a4e1905df53da81ff65a4b5857423da77590a41967d013b6956374c71->enter($__internal_a4fd7b1a4e1905df53da81ff65a4b5857423da77590a41967d013b6956374c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0ce52aa1b6075033a762c889759284ad25d487e25638452b16516f2401d7e7bd->leave($__internal_0ce52aa1b6075033a762c889759284ad25d487e25638452b16516f2401d7e7bd_prof);

        
        $__internal_a4fd7b1a4e1905df53da81ff65a4b5857423da77590a41967d013b6956374c71->leave($__internal_a4fd7b1a4e1905df53da81ff65a4b5857423da77590a41967d013b6956374c71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
