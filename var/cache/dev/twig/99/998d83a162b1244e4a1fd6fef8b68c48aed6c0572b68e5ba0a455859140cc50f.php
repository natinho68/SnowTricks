<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ac20f75799f38bd1c77e468d91d91e25a29aa28fdb058d64c64f6311bdd9e21b extends Twig_Template
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
        $__internal_7bab9a901de94032378d9c8fd49504ca7c5c0f939e05cd0dc0efc511ca3ba0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bab9a901de94032378d9c8fd49504ca7c5c0f939e05cd0dc0efc511ca3ba0b6->enter($__internal_7bab9a901de94032378d9c8fd49504ca7c5c0f939e05cd0dc0efc511ca3ba0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_55ac3c402f8be974efcbc95d9461dca64f5de10375c8ca488cad2da91d328e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ac3c402f8be974efcbc95d9461dca64f5de10375c8ca488cad2da91d328e27->enter($__internal_55ac3c402f8be974efcbc95d9461dca64f5de10375c8ca488cad2da91d328e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7bab9a901de94032378d9c8fd49504ca7c5c0f939e05cd0dc0efc511ca3ba0b6->leave($__internal_7bab9a901de94032378d9c8fd49504ca7c5c0f939e05cd0dc0efc511ca3ba0b6_prof);

        
        $__internal_55ac3c402f8be974efcbc95d9461dca64f5de10375c8ca488cad2da91d328e27->leave($__internal_55ac3c402f8be974efcbc95d9461dca64f5de10375c8ca488cad2da91d328e27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
