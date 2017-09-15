<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b72dc14e22d90f4cd371c2a43c0ca0c517c2bcd954b1223a27bbb4702dcd701 extends Twig_Template
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
        $__internal_b6e45fbda4f9be1e2bc0f6b3ef839ff517a40eb06ddc83123659e2862e47a43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6e45fbda4f9be1e2bc0f6b3ef839ff517a40eb06ddc83123659e2862e47a43d->enter($__internal_b6e45fbda4f9be1e2bc0f6b3ef839ff517a40eb06ddc83123659e2862e47a43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_0d875c923d6231fcf05159ba5c6b2f693e87e6ab5db4e3231422772286be5696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d875c923d6231fcf05159ba5c6b2f693e87e6ab5db4e3231422772286be5696->enter($__internal_0d875c923d6231fcf05159ba5c6b2f693e87e6ab5db4e3231422772286be5696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b6e45fbda4f9be1e2bc0f6b3ef839ff517a40eb06ddc83123659e2862e47a43d->leave($__internal_b6e45fbda4f9be1e2bc0f6b3ef839ff517a40eb06ddc83123659e2862e47a43d_prof);

        
        $__internal_0d875c923d6231fcf05159ba5c6b2f693e87e6ab5db4e3231422772286be5696->leave($__internal_0d875c923d6231fcf05159ba5c6b2f693e87e6ab5db4e3231422772286be5696_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
