<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_21c8a174344e63b6b17e0a297183eb3f0255c9d11f7beec7f5a9d6f2d7d8b174 extends Twig_Template
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
        $__internal_c5895979a7e3b1571df80315f5fabaf84885683f47d437e9576f179de2a187e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5895979a7e3b1571df80315f5fabaf84885683f47d437e9576f179de2a187e1->enter($__internal_c5895979a7e3b1571df80315f5fabaf84885683f47d437e9576f179de2a187e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_eb0b0296db088aa2517ef946cd51681785613280f3977ad4244c89c4c03a1d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0b0296db088aa2517ef946cd51681785613280f3977ad4244c89c4c03a1d94->enter($__internal_eb0b0296db088aa2517ef946cd51681785613280f3977ad4244c89c4c03a1d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c5895979a7e3b1571df80315f5fabaf84885683f47d437e9576f179de2a187e1->leave($__internal_c5895979a7e3b1571df80315f5fabaf84885683f47d437e9576f179de2a187e1_prof);

        
        $__internal_eb0b0296db088aa2517ef946cd51681785613280f3977ad4244c89c4c03a1d94->leave($__internal_eb0b0296db088aa2517ef946cd51681785613280f3977ad4244c89c4c03a1d94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
