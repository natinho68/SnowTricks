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
        $__internal_d26d2ddb32fed770a11d7e9e35e50b4262f0661323b3df42bed4aab0133fae08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26d2ddb32fed770a11d7e9e35e50b4262f0661323b3df42bed4aab0133fae08->enter($__internal_d26d2ddb32fed770a11d7e9e35e50b4262f0661323b3df42bed4aab0133fae08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_303301902990eed2935f3b8f894b0c1170254ff5249e5deb4efe1ef002a972f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303301902990eed2935f3b8f894b0c1170254ff5249e5deb4efe1ef002a972f8->enter($__internal_303301902990eed2935f3b8f894b0c1170254ff5249e5deb4efe1ef002a972f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_d26d2ddb32fed770a11d7e9e35e50b4262f0661323b3df42bed4aab0133fae08->leave($__internal_d26d2ddb32fed770a11d7e9e35e50b4262f0661323b3df42bed4aab0133fae08_prof);

        
        $__internal_303301902990eed2935f3b8f894b0c1170254ff5249e5deb4efe1ef002a972f8->leave($__internal_303301902990eed2935f3b8f894b0c1170254ff5249e5deb4efe1ef002a972f8_prof);

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
