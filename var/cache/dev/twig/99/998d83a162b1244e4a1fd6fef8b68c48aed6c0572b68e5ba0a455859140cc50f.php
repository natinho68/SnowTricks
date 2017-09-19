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
        $__internal_74f1017ad5ab7f9ee7e53d3611249974e675d96e6ffa43ec98923ad67dbd3d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f1017ad5ab7f9ee7e53d3611249974e675d96e6ffa43ec98923ad67dbd3d69->enter($__internal_74f1017ad5ab7f9ee7e53d3611249974e675d96e6ffa43ec98923ad67dbd3d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f68c06d94748e94a53b03063da521a903169d6963eb156916dd96bf574764f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68c06d94748e94a53b03063da521a903169d6963eb156916dd96bf574764f72->enter($__internal_f68c06d94748e94a53b03063da521a903169d6963eb156916dd96bf574764f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_74f1017ad5ab7f9ee7e53d3611249974e675d96e6ffa43ec98923ad67dbd3d69->leave($__internal_74f1017ad5ab7f9ee7e53d3611249974e675d96e6ffa43ec98923ad67dbd3d69_prof);

        
        $__internal_f68c06d94748e94a53b03063da521a903169d6963eb156916dd96bf574764f72->leave($__internal_f68c06d94748e94a53b03063da521a903169d6963eb156916dd96bf574764f72_prof);

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
