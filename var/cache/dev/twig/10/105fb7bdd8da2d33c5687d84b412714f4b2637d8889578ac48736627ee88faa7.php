<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_68b039c8543eddeff3f32587364c6b9cca86fd1a741f3cc74d1143d1d3b53d8d extends Twig_Template
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
        $__internal_98b01ae4d20c4f46a6d7fe6920f7c4b5faefdd09a707d908e308fd8743b3bd36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b01ae4d20c4f46a6d7fe6920f7c4b5faefdd09a707d908e308fd8743b3bd36->enter($__internal_98b01ae4d20c4f46a6d7fe6920f7c4b5faefdd09a707d908e308fd8743b3bd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8aa2c5a969987e280b587020eefd2d99f6d72a943d2b320b545d2be52229cf15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa2c5a969987e280b587020eefd2d99f6d72a943d2b320b545d2be52229cf15->enter($__internal_8aa2c5a969987e280b587020eefd2d99f6d72a943d2b320b545d2be52229cf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_98b01ae4d20c4f46a6d7fe6920f7c4b5faefdd09a707d908e308fd8743b3bd36->leave($__internal_98b01ae4d20c4f46a6d7fe6920f7c4b5faefdd09a707d908e308fd8743b3bd36_prof);

        
        $__internal_8aa2c5a969987e280b587020eefd2d99f6d72a943d2b320b545d2be52229cf15->leave($__internal_8aa2c5a969987e280b587020eefd2d99f6d72a943d2b320b545d2be52229cf15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
