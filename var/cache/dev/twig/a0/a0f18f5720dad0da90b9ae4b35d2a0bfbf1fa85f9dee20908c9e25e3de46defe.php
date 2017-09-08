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
        $__internal_0ff5858394290314c346357f8c7a50d555db043fd9fddabf783d150ff71879ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff5858394290314c346357f8c7a50d555db043fd9fddabf783d150ff71879ae->enter($__internal_0ff5858394290314c346357f8c7a50d555db043fd9fddabf783d150ff71879ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ee7c0abf43f340ffddf49b1b3487e84989cb133769e72b3babb66481de172063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7c0abf43f340ffddf49b1b3487e84989cb133769e72b3babb66481de172063->enter($__internal_ee7c0abf43f340ffddf49b1b3487e84989cb133769e72b3babb66481de172063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0ff5858394290314c346357f8c7a50d555db043fd9fddabf783d150ff71879ae->leave($__internal_0ff5858394290314c346357f8c7a50d555db043fd9fddabf783d150ff71879ae_prof);

        
        $__internal_ee7c0abf43f340ffddf49b1b3487e84989cb133769e72b3babb66481de172063->leave($__internal_ee7c0abf43f340ffddf49b1b3487e84989cb133769e72b3babb66481de172063_prof);

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
