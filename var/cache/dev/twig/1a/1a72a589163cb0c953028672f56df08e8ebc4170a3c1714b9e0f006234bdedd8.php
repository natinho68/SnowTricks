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
        $__internal_9ab0e0954a62050006900c121d4437df138e14fbbbe965360b8e3bd5a5844a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab0e0954a62050006900c121d4437df138e14fbbbe965360b8e3bd5a5844a8b->enter($__internal_9ab0e0954a62050006900c121d4437df138e14fbbbe965360b8e3bd5a5844a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a2ecc9e2305716d22f9c1ff31e6657ae378791d610855e9d6da28b947f36c583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ecc9e2305716d22f9c1ff31e6657ae378791d610855e9d6da28b947f36c583->enter($__internal_a2ecc9e2305716d22f9c1ff31e6657ae378791d610855e9d6da28b947f36c583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9ab0e0954a62050006900c121d4437df138e14fbbbe965360b8e3bd5a5844a8b->leave($__internal_9ab0e0954a62050006900c121d4437df138e14fbbbe965360b8e3bd5a5844a8b_prof);

        
        $__internal_a2ecc9e2305716d22f9c1ff31e6657ae378791d610855e9d6da28b947f36c583->leave($__internal_a2ecc9e2305716d22f9c1ff31e6657ae378791d610855e9d6da28b947f36c583_prof);

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
